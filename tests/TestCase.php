<?php

namespace ChrisDiCarlo\LaravelDynamicQueueWorkers\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use ChrisDiCarlo\LaravelDynamicQueueWorkers\LaravelDynamicQueueWorkersServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'ChrisDiCarlo\\LaravelDynamicQueueWorkers\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelDynamicQueueWorkersServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');

        /*
        $migration = include __DIR__.'/../database/migrations/create_laravel-dynamic-queue-workers_table.php.stub';
        $migration->up();
        */
    }
}
