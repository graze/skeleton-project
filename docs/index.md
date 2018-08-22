# Skeleton Project

This is where your project documentation should go. It SHOULD NOT just be a
repetition of the README, but COULD expand on some of the topics mentioned
there. The primary focus SHOULD be on someone wanting to make use of the
software/library rather than someone wanting to develop on it.

The index page SHOULD be a brief introduction. All other sections SHOULD be
separate pages, linked together via the MkDocs configuration.

Some things to consider:

- Introduction
    - What it is
    - Why it exists
    - How to obtain it
    - Requirements
    - Installation steps
- Quick Start.
    - ie. what's the quickest way for someone to get up and running,
      covering the most common use cases.
- Architecture
- Configuration
- Different use cases
- Deeper dive into individual features/components
- Limitations
- Any relevant history
- How to get help
- FAQ

Some third party documentation for inspiration:

- [Guzzle](http://docs.guzzlephp.org/en/stable/)
- [Doctrine DBAL](https://www.doctrine-project.org/projects/doctrine-dbal/en/current/)
- [CLImate](https://climate.thephpleague.com/)
- [Respect Validation](https://respect.github.io/Validation/)

This is heavily inspired by the skeleton project from [The PHP League](https://github.com/thephpleague/skeleton).
With some changes based on our preferences. Thanks to them!

## Quick Start

```shell
git clone --depth=1 git@github.com:graze/skeleton-project.git your-project
cd ./your-project
rm -rf .git
git init
```

You now have a copy of the files in this repository, in a new git repository with no previous history that can you
manipulate and push to other remote repositories.

### Replacement

Replace `__author-name__` `__author-username__` `__author@email.com`, `skeleton-project`, `__package-name__`,
`__package-description__`, `__year__` with their correct values in `README.md`,
`CHANGELOG.md`, `CONTRIBUTING.md`, `LICENSE`, `composer.json`,
`Dockerfile` and `travis.yml` files, then delete all the `*.md` files in the `docs` directory.

### Continuous Integration

Our Open source projects rely on a set of external services to operate.

1. [Travis](external_services/travis.md) is our main continuous integration pipeline and performs testing and building.
1. [Scrutinizer](external_services/scrutinizer.md) profiles the code looking for coding standards violations and other recommendations.
1. [Packagist](external_services/packagist.md) stores the build library for use by other projects with `composer`.
1. [Docker Hub](external_services/docker_hub.md) is used to store `docker` images.
1. [Github](external_services/github.md) is where the code is hosted.
1. [Github Pages](external_services/github_pages.md) hosts any documentation using github pages.
