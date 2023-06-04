# Validates a field with multiple rules using the OR operator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/thomas-omweri/laravel-multi-validator.svg?style=flat-square)](https://packagist.org/packages/thomas-omweri/laravel-multi-validator)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/thomas-omweri/laravel-multi-validator/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/thomas-omweri/laravel-multi-validator/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/thomas-omweri/laravel-multi-validator/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/thomas-omweri/laravel-multi-validator/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/thomas-omweri/laravel-multi-validator.svg?style=flat-square)](https://packagist.org/packages/thomas-omweri/laravel-multi-validator)

Sometimes you may want to validate a field with multiple rules where at least one of the rules is true.This was not possible until Laravel Multi Validator happened!


## Installation

You can install the package via composer:

```bash
composer require thomas-omweri/laravel-multi-validator
```

## Usage

```php
$validator = Validator::make(
    [
        'name' => 'Thomas Omweri',
        'contact' => '+2547xxxxxxxx'
    ],
     [
        'name' => [
            new orRule('starts_with:Thomas', 'ends_with:Omweri'),
        ],
        'contact' => [
            new anyOf(
                [
                    'email',
                    Rule::phone()->country('KE')->mobile(),
                    Rule::phone()->country('KE')->fixed()
                ]
            ),
        ],
    ]
);
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

- [Thomas Omweri](https://github.com/thomasmokuaomweri2011)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
