<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Commands;

use Illuminate\Console\Command;

class LaravelDynamicQueueWorkersCommand extends Command
{
    public $signature = 'laravel-dynamic-queue-workers';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
