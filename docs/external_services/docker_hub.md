# Docker Hub

Some projects include a `Dockerfile` that should be deployed to [Docker Hub][docker-hub].

## Docker Repositories

This can be deployed in a few ways, either automatically using an [Automated Build](#automated-build) on [Docker Hub][docker-hub],
or by using a [Manual Build](#manual-build) process to a Standard Repository.

### Automated Build

Automated build repositories are useful when the build process is simple and everything can happen inside the `Dockerfile`.

The automated build, will automatically tag images for github branches with `:branch-name` and github tags with `:tag`.
Commits pushed to `master` (or another chosen branch) to also become `:latest`.

1. Create an Automated build: [Add Automated Build][docker-hub-add-automated-build]
1. Select the repository from github
1. Change the namespace to `graze`
1. Click `Create`
1. Build Settings:
    1. Go to `Build Settings`
    1. Ensure that it is built on `tag` and `branch` and `branch = master` gets built as `latest`
        ![build settings][build-settings-image]
1. Create a build hook: _This will build the image with extra arguments passed into the Dockerfile_
    1. Create the file `hooks/build`
    1. Put the following in:

        ```bash
        #!/bin/sh

        docker build --build-arg BUILD_DATE="$(date -u +"%Y-%m-%dT%H:%M:%SZ")" \
            --build-arg VCS_REF="$(git rev-parse --short HEAD)" \
            -t "$IMAGE_NAME" .
        ```

### Manual Build

A manual build requires you to create a [Standard Repository][docker-hub-add-repository] on [Docker Hub][docker-hub].

You SHOULD include a specific tagged version when pushing, and manually specify the `latest` tag yourself only when appropriate.

1. Create a standard repository: [Add Repository][docker-hub-add-repository]
1. Push images to it using the `docker` command line:

    ```shell
    docker login
    docker build --build-arg BUILD_DATE="$(date -u +"%Y-%m-%dT%H:%M:%SZ")" \
            --build-arg VCS_REF="$(git rev-parse --short HEAD)" \
            -t graze/skeleton:<tag> .
    docker push graze/skeleton:<tag>
    ```

## Setting up Permissions

By default only the creator of a repository has access to it, so more permissions for your team are required.

1. Go to `Collaborators`
1. Add all the teams required for this project:
    1. `admin`,`owners` => `Admin` permission
    1. `developers`,`build`,`deploy` => `Write` permission

## README badges

You can include the image size and pulls on your `README.md` file using the following badges:

```markdown
[![Docker Image Size](https://img.shields.io/microbadger/image-size/graze/skeleton-project.svg?style=flat-square)](https://hub.docker.com/r/graze/skeleton-project/)
[![Docker Pulls](https://img.shields.io/docker/pulls/graze/skeleton-project.svg?style=flat-square)](https://hub.docker.com/r/graze/skeleton-project/)
```

[docker-hub]: https://hub.docker.com
[docker-hub-add-automated-build]: https://hub.docker.com/add/automated-build/graze/github/orgs/
[docker-hub-add-repository]: https://hub.docker.com/add/repository/?namespace=graze
[build-settings-image]: docker_hub_build_settings.png
