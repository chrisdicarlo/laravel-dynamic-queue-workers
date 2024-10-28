<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Concerns;

use Illuminate\Process\Pool;
use Illuminate\Support\Facades\Process;
use Illuminate\Support\Facades\Queue;

use function Laravel\Prompts\info;
use function Laravel\Prompts\spin;
use function Laravel\Prompts\text;

trait HasDynamicWorkers
{
    private ?int $workerCount;

    private function resolveWorkerCount(?string $optionName = 'workers'): void
    {
        $maxWorkers = (int) (shell_exec('nproc') * 0.85);

        $this->workerCount = text(
            label: "How many workers would you like to use? (Max: {$maxWorkers})",
            default: $this->option('workers'),
            hint: 'The number of workers must be less than 85% of the available CPU cores',
            validate: fn (string $value) => match (true) {
                ! is_numeric($value) => 'The count must be numeric',
                $value < 1 => 'The count must be greater than 0',
                $value > $maxWorkers => 'Number of workers cannot exceed 85% of the available CPU cores',
                default => null
            }
        );
    }

    private function runWorkers(?string $queue = 'default', ?string $driver = 'database'): void
    {
        $initialQueueSize = $currentQueueSize = Queue::connection($driver)->size($queue);

        $pool = spin(
            message: 'Starting queue workers...',
            callback: function () use ($driver, $queue) {
                sleep(2);

                return Process::pool(function (Pool $pool) use ($driver, $queue) {
                    for ($i = 0; $i < $this->workerCount; $i++) {
                        $pool->command("php artisan queue:work {$driver} --queue={$queue} --stop-when-empty --memory=4096 --tries=1 --timeout=10000");
                    }
                })->start();
            });

        info("Started {$this->workerCount} workers");

        $progressBar = $this->output->createProgressBar($initialQueueSize);
        $progressBar->setFormat('very_verbose');
        $progressBar->start();

        while ($pool->running() && $currentQueueSize > 0) {
            $currentQueueSize = Queue::connection($driver)->size($queue);
            $progressBar->setProgress($initialQueueSize - $currentQueueSize);
        }

        $progressBar->finish();

        spin(
            message: 'Stopping queue workers...',
            callback: function () use ($pool) {
                sleep(2);

                return $pool->signal(SIGTERM);
            }
        );

        info('Stopped all workers');
    }
}
