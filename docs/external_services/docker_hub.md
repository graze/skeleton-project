# Docker Hub

Some projects include a `Dockerfile` that should be deployed to [Docker Hub][docker-hub].

1. Create an Automated Build repository:
    1. Visit: [Add Automated Build][docker-hub-add-automated-build]
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

1. Create a standard repository
    1. Visit [Add Repository][docker-hub-add-repository]
    1. Push images to it using the `docker` command line:

        ```shell
        docker build -t graze/skeleton .
        docker push graze/skeleton
        ```

1. Set up Permissions
    1. Go to `Collaborators`
    1. Add all the teams required for this project:
        1. `admin`,`owners` => `Admin` permission
        1. `developers`,`build`,`deploy` => `Write` permission

[docker-hub]: https://hub.docker.com
[docker-hub-add-automated-build]: https://hub.docker.com/add/automated-build/graze/github/orgs/
[docker-hub-add-repository]: https://hub.docker.com/add/repository/?namespace=graze
[build-settings-image]: docker_hub_build_settings.png
