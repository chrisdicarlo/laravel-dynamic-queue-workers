# Traits to supercharge your Artisan commmands that use queues and workers.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrisdicarlo/laravel-dynamic-queue-workers.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/laravel-dynamic-queue-workers)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/chrisdicarlo/laravel-dynamic-queue-workers/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/chrisdicarlo/laravel-dynamic-queue-workers/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/chrisdicarlo/laravel-dynamic-queue-workers/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/chrisdicarlo/laravel-dynamic-queue-workers/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/chrisdicarlo/laravel-dynamic-queue-workers.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/laravel-dynamic-queue-workers)

This package offers three traits for use with Artisan commands for flexible queue and worker handling in Laravel applications.  It allows runtime configuration of the queue, queue driver, and the number of workers to dynamically start.

* Dynamic Queue Selection: Choose the queue name
* Dynamic Queue Driver: Change queue driver
* Variable Queue Workers: Start/stop workers a specified number of queue workers
 
> [!WARNING]
> This package is currently pre-alpha and is subject to change without notice.  Use at your own risk!

## Support me

**Feel like shouting out a thank you?** [Buy me a coffee! ☕️](https://buymeacoffee.com/chrisdicarlo)

## Installation

You can install the package via composer:

```bash
composer require chrisdicarlo/laravel-dynamic-queue-workers
```

## Usage

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
