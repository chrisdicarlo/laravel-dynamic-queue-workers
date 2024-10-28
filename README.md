# Traits to supercharge your Artisan commmands that use queues and workers.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrisdicarlo/laravel-dynamic-queue-workers.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/laravel-dynamic-queue-workers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/chrisdicarlo/laravel-dynamic-queue-workers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/chrisdicarlo/laravel-dynamic-queue-workers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/chrisdicarlo/laravel-dynamic-queue-workers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/chrisdicarlo/laravel-dynamic-queue-workers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrisdicarlo/laravel-dynamic-queue-workers.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/laravel-dynamic-queue-workers)

This package offers three traits for use with Artisan commands for flexible queue and worker handling in Laravel applications.  It allows runtime configuration of the queue, queue driver, and the number of workers to start dynamically.

* Dynamic Queue Selection: Choose the queue name
* Dynamic Queue Driver: Change queue driver
* Variable Queue Workers: Start/stop workers a specified number of queue workers

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/laravel-dynamic-queue-workers.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/laravel-dynamic-queue-workers)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require chrisdicarlo/laravel-dynamic-queue-workers
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="laravel-dynamic-queue-workers-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="laravel-dynamic-queue-workers-config"
```

This is the contents of the published config file:

```php
return [
];
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="laravel-dynamic-queue-workers-views"
```

## Usage

```php
$laravelDynamicQueueWorkers = new ChrisDiCarlo\LaravelDynamicQueueWorkers();
echo $laravelDynamicQueueWorkers->echoPhrase('Hello, ChrisDiCarlo!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chris Di Carlo](https://github.com/chrisdicarlo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
