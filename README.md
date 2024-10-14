# This is my package filament-page-builder

[![Latest Version on Packagist](https://img.shields.io/packagist/v/emamalias/filament-page-builder.svg?style=flat-square)](https://packagist.org/packages/emamalias/filament-page-builder)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/emamalias/filament-page-builder/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/emamalias/filament-page-builder/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/emamalias/filament-page-builder/fix-php-code-styling.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/emamalias/filament-page-builder/actions?query=workflow%3A"Fix+PHP+code+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/emamalias/filament-page-builder.svg?style=flat-square)](https://packagist.org/packages/emamalias/filament-page-builder)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require emamalias/filament-page-builder
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-page-builder-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-page-builder-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-page-builder-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$filamentPageBuilder = new Emamalias\FilamentPageBuilder();
echo $filamentPageBuilder->echoPhrase('Hello, Emamalias!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Elias](https://github.com/emamalias)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
