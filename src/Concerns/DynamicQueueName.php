<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Concerns;

use function Laravel\Prompts\text;

trait DynamicQueueName
{
    private string $queue;

    protected function resolveQueueName(?string $optionName = 'queue'): void
    {
        if ($this->hasOption($optionName)) {
            $queue = strtolower($this->option($optionName));
        }

        $this->queue = text(
            label: 'What queue name would you like to use?',
            default: $queue,
            hint: 'All the jobs will be added to this queue.',
        );
    }
}
