# :package-name

[![Latest Version on Packagist](https://img.shields.io/packagist/v/graze/:package-name.svg?style=flat-square)](https://packagist.org/packages/graze/:package-name)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/graze/:package_name/master.svg?style=flat-square)](https://travis-ci.org/graze/:package-name)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/graze/:package-name.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/:package-name/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/graze/:package-name.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/:package-name)
[![Total Downloads](https://img.shields.io/packagist/dt/graze/:package-name.svg?style=flat-square)](https://packagist.org/packages/graze/:package-name)

>This is heavily inspired by the skeleton project from [The PHP League](https://github.com/thephpleague/skeleton). With some changes based on our preferences. Thanks to them!

>**Note:** Replace `:author-name` `:author-username` `:author-email` `:package-name` `:package-description`, `:scrutinizer-access-token`, `:year` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md), [composer.json](composer.json) and [travis.yml](.travis.yml) files, then delete this blockquote.

>**To use this skeleton project:**
```shell
$ git clone --depth=1 git@github.com:graze/skeleton-project.git :package-name
$ cd ./:package-name
$ rm -rf .git
$ git init
```

>You now have a copy of the files in this repository, in a new git repository with no previous history that can you manipulate and push to other remote repositories.

This is where your description should go, try and limit it to a paragraph or two. It should outline the 'mission' or goals of the project
to make it clear what the project is trying to achieve and the problems that it solves.

## Install

Via Composer

``` bash
$ composer require graze/:package_name
```

## Usage

``` php
$skeleton = new Graze\Skeleton\Skeleton('big', 'small', 'dog');
echo $skeleton->sing();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ make test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@graze.com instead of using the issue tracker.

## Credits

- [:author-name](https://github.com/:author-username)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
