Admin template

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]



## Install

Via Composer

``` bash
$ composer require giaphiep/admin
```

## Usage
1. In configs/app.php file, add the following to the providers array (optional in version 5.5)
``` php
GiapHiep\Admin\AdminServiceProvider::class,
```
2. In Kernel.php file, add the following to the routeMiddleware array
``` php
'admin.guest' => \GiapHiep\Admin\Middleware\RedirectIfAdminAuthenticated::class,
'admin.auth' => \GiapHiep\Admin\Middleware\AdminAuthenticate::class,
```
3. Run
``` bash
$ php artisan vendor:publish
$ php artisan migrate
$ php artisan db:seed --class=UsersTableSeeder
```


## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email hiep.giapvan@gmail.com instead of using the issue tracker.

## Credits

- [Giáp Hiệp][https://giaphiep.com]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/giaphiep/admin.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/giaphiep/admin/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/:vendor/:package_name.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/:vendor/:package_name.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/giaphiep/admin.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/giaphiep/admin
[link-travis]: https://travis-ci.org/giaphiep/admin
[link-scrutinizer]: https://scrutinizer-ci.com/g/giaphiep/admin/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/giaphiep/admin
[link-downloads]: https://packagist.org/packages/giaphiep/admin
[link-author]: https://github.com/giaphiep
[link-contributors]: ../../contributors
