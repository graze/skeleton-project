# Github Pages

To deploy a documentation site (like this one), we currently use [Github Pages][github-pages]

[Travis](travis.md) can deploy the documentation to github pages.

1. Add the following to the `.travis.yml` file to deploy to github pages. _This is included in the sample file_

    ```yml
    stages:
      - test
      - name: deploy
        if: branch = master
    jobs:
    include:
      - stage: deploy
        # The command to run, change this if using something different
        script: make docs-build
        deploy:
            provider: pages
            # The local directory where the documentation is built to
            local-dir: site
            skip-cleanup: true
            keep-history: true
            verbose: true
            github-token: ${GITHUB_TOKEN}
            on:
                branch: master
    ```

1. Generate a github token with write access to your repository.
1. Add the token to the travis project.
    1. Via the [Travis Admin][travis-add-env] page
    1. Via the command line [Travis CLI][travis-cli]

        ```bash
        travis env GITHUB_TOKEN <token>
        ```

[github-pages]: https://pages.github.com/
[travis-add-env]: https://docs.travis-ci.com/user/environment-variables/#defining-variables-in-repository-settings
[travis-cli]: https://github.com/travis-ci/travis.rb#env
