# Laravel Admin Form

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

## Install

Via Composer

``` bash
$ composer require am2studio/laravel-admin-form
```

Register service provider in your `app.php`

```php
AM2Studio\LaravelAdminForm\AdminFormServiceProvider::class,
```

Register the facade in your `app.php`

```php
'AdminForm'  => AM2Studio\LaravelAdminForm\AdminFormFacade::class,
```

You can use default templates or if you want to use your own templates you can publish views and edit them

```php
php artisan vendor:publish --provider="AM2Studio\LaravelAdminForm\AdminFormServiceProvider" --tag=views
```

## Usage

Inside template:
``` php
{!! AdminForm::text($name, $value, $options) !!}
```

the list of helpers:
```
{!! AdminForm::text() !}}
{!! AdminForm::number() !}}
{!! AdminForm::radio() !}}
{!! AdminForm::password() !}}
{!! AdminForm::textarea() !}}
{!! AdminForm::select() !}}
{!! AdminForm::date() !}}
{!! AdminForm::checkbox() !}}
{!! AdminForm::submit() !}}
```
they all accept same parameters as ```Form::``` helpers

There is another helper method
```
{!! AdminForm::row($label, $adminFormElement) !!}
```
example
```
{!! AdminForm::row(trans('ui.first_name'), AdminForm::text('first_name', $user->first_name)) !!}
```
this will render into
```
<tr>
    <td>First Name</td>
    <td>
        <div class="card-form">
            <fieldset class="no-inline-edit">
                <input placeholder="Enter first name here" name="first_name" type="text" value="Am2">
                <button data-js="submit-field" type="submit"><i class="fa fa-check"></i></button>
                <i class="fieldset-overlay" data-js="focus-on-field"></i>
            </fieldset>
        </div>
    </td>
</tr>
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Credits

- [Marko Šamec][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/am2studio/laravel-qandidate.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/am2studio/laravel-qandidate/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/am2studio/laravel-qandidate.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/am2studio/laravel-qandidate.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/am2studio/laravel-qandidate.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/am2studio/laravel-qandidate
[link-downloads]: https://packagist.org/packages/am2studio/laravel-qandidate
[link-author]: https://github.com/msamec
[link-contributors]: ../../contributors