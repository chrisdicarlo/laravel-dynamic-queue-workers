<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ChrisDiCarlo\LaravelDynamicQueueWorkers\LaravelDynamicQueueWorkers
 */
class LaravelDynamicQueueWorkers extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ChrisDiCarlo\LaravelDynamicQueueWorkers\LaravelDynamicQueueWorkers::class;
    }
}
