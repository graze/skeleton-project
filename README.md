# skeleton-project

[![Latest Version on Packagist](https://img.shields.io/packagist/v/graze/skeleton-project.svg?style=flat-square)](https://packagist.org/packages/graze/skeleton-project)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/graze/skeleton-project/master.svg?style=flat-square)](https://travis-ci.org/graze/skeleton-project)
[![Coverage Status](https://img.shields.io/scrutinizer/coverage/g/graze/skeleton-project.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/skeleton-project/code-structure)
[![Quality Score](https://img.shields.io/scrutinizer/g/graze/skeleton-project.svg?style=flat-square)](https://scrutinizer-ci.com/g/graze/skeleton-project)
[![Total Downloads](https://img.shields.io/packagist/dt/graze/skeleton-project.svg?style=flat-square)](https://packagist.org/packages/graze/skeleton-project)

>This is heavily inspired by the skeleton project from [The PHP League](https://github.com/thephpleague/skeleton). With some changes based on our preferences. Thanks to them!
>
>**Note:** Replace `__author-name__` `__author-username__` `__author@email.com` `skeleton-project` `__package-description__`, `__year__` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md), [composer.json](composer.json), [Dockerfile](Dockerfile) and [travis.yml](.travis.yml) files, then delete this blockquote.
>
>**To use this skeleton project:**
> ```shell
> git clone --depth=1 git@github.com:graze/skeleton-project.git your-project
> cd ./your-project
> rm -rf .git
> git init
> ```
>
>You now have a copy of the files in this repository, in a new git repository with no previous history that can you manipulate and push to other remote repositories.
>
> ## Continuous Integration
>
>Your project should make use of the following remote CI services:
>
> ### [Travis CI](https://travis-ci.org/graze/) - automated testing
>
> 1. Log-in with github
> 1. visit: https://travis-ci.org/profile/graze
> 1. Click `sync with github`
> 1. Enable your project
>
> ### [Scrutinizer CI](https://scrutinizer-ci.com/organizations/graze/repositories) - code quality
>
> 1. Log-in via github
> 1. Click `+ Add Repository`
> 1. Select `graze` as the organisation (ask a graze/@open-source-team member for access)
> 1. Entry the repository name
> 1. Click `Add Repository`
> 1. Click on the 🔧  > `Configuration` set `Shared Config` to `graze/standards + open source`
>
> ### [Packagist](https://packagist.org/graze) - package repository
>
> 1. Log-in using the graze account
> 1. Click `Submit`
> 1. Paste the `git` url (e.g. `git@github.com:graze/skeleton-project.git`)
> 1. Click `Check`
> 1. Follow the instructions on auto updating the project in packagist
>
> ## Github Teams
>
> Add this project to the graze [Open Source](https://github.com/orgs/graze/teams/open-source-team/members) team to allows others to contribute to this project

This is where your description should go, try and limit it to a paragraph or two. It should outline the 'mission' or goals of the project
to make it clear what the project is trying to achieve and the problems that it solves.

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

You can test mkdocs by calling:

```shell
make docs-test
```

This will start a development server in docker on port `8080`.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email security@graze.com instead of using the issue tracker.

## Credits

- [__author-name__](https://github.com/__author-username__)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
