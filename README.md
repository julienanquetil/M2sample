# JulienAnquetil_m2sample Magento Module
<div align="center">

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
![Supported Magento Versions][ico-compatibility]

[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Maintainability][ico-maintainability]][link-maintainability]
</div>

---

This module use the intger template system

## Installation

1. Install it into your Magento 2 project with composer:
    ```
    composer require JulienAnquetil/magento2-sample-module
    ```

2. Enable module
    ```
    bin/magento setup:upgrade
    ```

## Configuration

## Usage

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Testing

### Unit Tests

```
vendor/bin/phpunit tests/unit
```

### Magento Integration Tests

0. Configure test database in `dev/tests/integration/etc/install-config-mysql.php`. [Read more in the Magento docs.](https://devdocs.magento.com/guides/v2.4/test/integration/integration_test_execution.html) 

1. Copy `tests/integration/phpunit.xml.dist` from the package to `dev/tests/integration/phpunit.xml` in your Magento installation.

2. In that directory, run
    ``` bash
    ../../../vendor/bin/phpunit
    ```


## Security

If you discover any security related issues, please email julien.anquetil@gmail.com instead of using the issue tracker.

## Credits

- [Julien ANQUETIL][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.

[ico-version]: https://img.shields.io/packagist/v/JulienAnquetil/magento2-sample-module.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/JulienAnquetil/magento2-sample-module/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/JulienAnquetil/magento2-sample-module?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/JulienAnquetil/magento2-sample-module.svg?style=flat-square
[ico-maintainability]: https://img.shields.io/codeclimate/maintainability/JulienAnquetil/magento2-sample-module?style=flat-square
[ico-compatibility]: https://img.shields.io/badge/magento-2.3%20|%202.4-brightgreen.svg?logo=magento&longCache=true&style=flat-square

[link-packagist]: https://packagist.org/packages/JulienAnquetil/magento2-sample-module
[link-travis]: https://travis-ci.org/JulienAnquetil/magento2-sample-module
[link-scrutinizer]: https://scrutinizer-ci.com/g/JulienAnquetil/magento2-sample-module/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/JulienAnquetil/magento2-sample-module
[link-maintainability]: https://codeclimate.com/github/JulienAnquetil/magento2-sample-module
[link-author]: https://github.com/julienanquetil
[link-contributors]: ../../contributors
