<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Concerns;

use function Laravel\Prompts\select;
use function Laravel\Prompts\warning;

trait DynamicQueueDriver
{
    private ?string $queueDriver;

    protected function resolveQueueDriver(?string $optionName = 'queue-driver'): void
    {
        if ($this->hasOption($optionName)) {
            $queueDriver = strtolower($this->option($optionName));

            if (! in_array($queueDriver, ['database', 'redis'])) {
                warning('Invalid queue driver. Supported drivers are: database, redis');
            }
        }

        $this->queueDriver = select(
            label: 'What queue driver would you like to use?',
            options: ['database', 'redis'],
            default: $queueDriver ?? 'database',
            hint: 'Redis is faster but needs to be installed and set up.',
            required: true,
        );

        config(["queue.connections.{$this->queueDriver}.block_for" => 15]);
    }
}
