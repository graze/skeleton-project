# __package-name__

[![Latest Version on Packagist](https://img.shields.io/packagist/v/graze/__package-name__.svg?style=flat-square)](https://packagist.org/packages/graze/__package-name__)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/graze/__package-name__/master.svg?style=flat-square)](https://travis-ci.org/graze/__package-name__)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/graze/__package-name__.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/__package-name__/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/graze/__package-name__.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/__package-name__)
[![Total Downloads](https://img.shields.io/packagist/dt/graze/__package-name__.svg?style=flat-square)](https://packagist.org/packages/graze/__package-name__)

>This is heavily inspired by the skeleton project from [The PHP League](https://github.com/thephpleague/skeleton). With some changes based on our preferences. Thanks to them!

>**Note:** Replace `__author-name__` `__author-username__` `__author@email.com` `__package-name__` `__package-description__`, `__year__` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md), [composer.json](composer.json), [Dockerfile](Dockerfile) and [travis.yml](.travis.yml) files, then delete this blockquote.

>**To use this skeleton project:**
```shell
$ git clone --depth=1 git@github.com:graze/skeleton-project.git __package-name__
$ cd ./__package-name__
$ rm -rf .git
$ git init
```

>You now have a copy of the files in this repository, in a new git repository with no previous history that can you manipulate and push to other remote repositories.

>**Continuous Integration**

>Your project should make use of the following remote CI services:
- [Travis CI](https://travis-ci.org/graze/) - automated testing
- [Scrutinizer CI](https://scrutinizer-ci.com/organizations/graze/repositories) - code quality

>Follow the instructions on the respective sites to add your project. Builds should be triggered on each Pull Request and each merge in to the master branch.

This is where your description should go, try and limit it to a paragraph or two. It should outline the 'mission' or goals of the project
to make it clear what the project is trying to achieve and the problems that it solves.

## Install

Via Composer

``` bash
$ composer require graze/__package-name__
```

## Usage

``` php
$skeleton = new Graze\Skeleton\Skeleton('big', 'small', 'dog');
echo $skeleton->sing();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

```bash
$ make test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@graze.com instead of using the issue tracker.

## Credits

- [__author-name__](https://github.com/__author-username__)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
