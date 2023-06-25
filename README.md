# filament-radio-group Package Documentation

[![Latest Version on Packagist](https://img.shields.io/packagist/v/astersnake/filament-radio-group.svg?style=flat-square)](https://packagist.org/packages/astersnake/filament-radio-group)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/astersnake/filament-radio-group/run-tests?label=tests)](https://github.com/astersnake/filament-radio-group/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/astersnake/filament-radio-group/Check%20&%20fix%20styling?label=code%20style)](https://github.com/astersnake/filament-radio-group/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/astersnake/filament-radio-group.svg?style=flat-square)](https://packagist.org/packages/astersnake/filament-radio-group)

The filament-radio-group package provides an enhanced radio button group functionality for your Filament applications. It offers a cleaner way to handle and display multiple radio button options, with support for customized icons, descriptions, and display arrangements.

## Installation

Install the filament-radio-group package via composer:

```bash
composer require astersnake/filament-radio-group
```

## Usage

The filament-radio-group package provides a `RadioGroup` class, which you can use to construct a radio button group in your application.

```php
use Astersnake\Filament\RadioGroup\RadioGroup;

$radioGroup = RadioGroup::make('radio_group')
    ->options([
        'option_1' => 'Option 1',
        'option_2' => 'Option 2',
        'option_3' => 'Option 3',
    ])
    ->descriptions([
        'option_1' => 'Description for option 1',
        'option_2' => 'Description for option 2',
        'option_3' => 'Description for option 3',
    ])
    ->icons([
        'option_1' => 'lucide-fish',
        'option_2' => 'lucide-fish',
        'option_3' => 'lucide-fish',
    ])
    ->iconClasses([
        'option_1' => 'w-10 h-10 text-primary-600',
        'option_2' => 'w-10 h-10 text-success-600',
        'option_3' => 'w-10 h-10 text-danger-600',
    ])
    ->columns(3)
    ->required();
```

In the example above, `RadioGroup::make('radio_group')` creates a new radio button group with the name 'radio_group'.

- The `options()` method takes an associative array where keys are option values and values are option labels.
- The `descriptions()` method takes an associative array where keys are option values and values are descriptions for options.
- The `icons()` method takes an associative array where keys are option values and values are icon names.
- The `iconClasses()` method is used to assign classes to the icons. It also takes an associative array with option values as keys and CSS classes as values.

## Theming

If you are using a custom theme for Filament, you will need to add this package's views to your Tailwind CSS config.

```js
content: [
    ...
    "./vendor/astersnake/filament-radio-group/resources/views/**/*.blade.php",
],
```

## Full Compatibility

The filament-radio-group package is built on the original Filament radio field, which means it supports all the functionalities available from the base radio field. This includes but is not limited to labeling, setting a default value, and adding help text. The package simply extends these functionalities, providing more flexibility and customization options.

For more information on using the base radio field functionalities, please refer to the [Filament Documentation](https://filamentadmin.com/docs/2.x/forms/fields#radio).

## Testing

To run the tests for the package:

```bash
composer test
```

## Changelog

Please refer to the [CHANGELOG](CHANGELOG.md) for more information about the recent changes.

## Contributing

Your contributions are always welcome! Please see our [CONTRIBUTING](.github/CONTRIBUTING.md) guide for details.

## Security Vulnerabilities

If you discover any security vulnerabilities in this package, please follow our [security policy](../../security/policy) to report them.

## Credits

- [astersnake](https://github.com/astersnake)
- [All Contributors](../../contributors)

## License

This package is licensed under the MIT License (MIT). Please see the [License File](LICENSE.md) for more information.
