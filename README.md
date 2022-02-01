# Check Operator for the phonenumber in cameroon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ gildastema/phonenumber.svg?style=flat-square)](https://packagist.org/packages/ gildastema/phonenumber)
[![Total Downloads](https://img.shields.io/packagist/dt/ gildastema/phonenumber.svg?style=flat-square)](https://packagist.org/packages/ gildastema/phonenumber)
![GitHub Actions](https://github.com/ gildastema/phonenumber/actions/workflows/main.yml/badge.svg)

Check Operator for the phonenumber in cameroon

## Installation

You can install the package via composer:

```bash
composer require  gildastema/phonenumber
```

## Usage

```php
    (new \Gildastema\Phonenumber\Phonenumber())->getOperator('691131446');
    (new \Gildastema\Phonenumber\Phonenumber())->getOperator('237691131446');
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email gildastema3@gmail.com instead of using the issue tracker.

## Credits

-   [Gildas Tema](https://github.com/gildastema)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## PHP Package Boilerplate

This package was generated using the [PHP Package Boilerplate](https://laravelpackageboilerplate.com) by [Beyond Code](http://beyondco.de/).
