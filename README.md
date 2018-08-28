# skeleton-project

[![Latest Version on Packagist](https://img.shields.io/packagist/v/graze/skeleton-project.svg?style=flat-square)](https://packagist.org/packages/graze/skeleton-project)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/graze/skeleton-project/master.svg?style=flat-square)](https://travis-ci.org/graze/skeleton-project)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/graze/skeleton-project.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/skeleton-project/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/graze/skeleton-project.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/skeleton-project)
[![Total Downloads](https://img.shields.io/packagist/dt/graze/skeleton-project.svg?style=flat-square)](https://packagist.org/packages/graze/skeleton-project)

> Follow the steps in the [documentation](http://graze.github.io/skeleton-project/#quick-start) to set up the project and
> delete this block quote.

This is where your description should go, try and limit it to a paragraph or two.
It should outline the 'mission' or goals of the project to make it clear what the project is trying to achieve and the
problems that it solves.

## Install

Via Composer

```bash
composer require graze/skeleton-project
```

## Usage

```php
$skeleton = new Graze\Skeleton\Skeleton('big', 'small', 'dog');
echo $skeleton->sing();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

```shell
make build test
```

You can test MkDocs by calling:

```shell
make docs-test
```

This will start a development server in docker on port `8000`.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@graze.com instead of using the issue tracker.

## Credits

- [__author-name__](https://github.com/__author-username__)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
