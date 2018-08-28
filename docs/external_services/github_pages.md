# Github Pages

To deploy a documentation site (like this one), we currently use [Github Pages][github-pages]

[Travis](travis.md) can deploy the documentation to github pages.

1. Add a deploy stage to the `.travis.yml` file to deploy to github pages.
  _A slightly more complex version is included in the example file_

    ```yml
    stages:
      - test
      - name: deploy
        if: branch = master
    jobs:
    include:
      - stage: deploy
        # ensure docker is installed first
        before_script: sudo apt-get -y -o Dpkg::Options::="--force-confnew" install docker-ce
        # The command to run, change this if using something different
        script: make docs-build
        deploy:
            provider: pages
            # The local directory where the documentation is built to
            local-dir: site
            skip-cleanup: true
            keep-history: true
            verbose: true
            github-token: $GITHUB_TOKEN
            on:
                branch: master
    ```

1. Generate a github token with write access to your repository.
1. Add the token to the travis project.
    1. Either via the [Travis Admin][travis-add-env] page
    1. Or via the command line [Travis CLI][travis-cli]

        ```bash
        travis env GITHUB_TOKEN <token>
        ```

[github-pages]: https://pages.github.com/
[travis-add-env]: https://docs.travis-ci.com/user/environment-variables/#defining-variables-in-repository-settings
[travis-cli]: https://github.com/travis-ci/travis.rb#env
