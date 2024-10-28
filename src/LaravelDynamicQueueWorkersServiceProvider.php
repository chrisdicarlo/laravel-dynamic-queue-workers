<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers;

use ChrisDiCarlo\LaravelDynamicQueueWorkers\Commands\LaravelDynamicQueueWorkersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDynamicQueueWorkersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-dynamic-queue-workers');
    }
}
