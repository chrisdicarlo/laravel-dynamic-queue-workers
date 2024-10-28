<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers;

use ChrisDiCarlo\LaravelDynamicQueueWorkers\Commands\LaravelDynamicQueueWorkersCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class LaravelDynamicQueueWorkersServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-dynamic-queue-workers')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_dynamic_queue_workers_table')
            ->hasCommand(LaravelDynamicQueueWorkersCommand::class);
    }
}