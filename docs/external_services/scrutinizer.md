# Scrutinizer CI

We use [Scrutinizer][scrutinizer] for coding standards and quality.

To add your repository to be analysed:

1. Visit [Scrutinizer][scrutinizer]
1. Log-in via github
1. Click `+ Add Repository`
1. Select `graze` as the organisation
    1. If you do not have permissions, ask a graze/@open-source-team member for access
1. Enter the repository name
1. Select `PHP` as the language
1. Ensure tests are not being run (as travis is doing the testing)
1. Click `Add Repository`
1. Click on the 🔧  > `Configuration` set `Shared Config` to `graze/standards + open source`

[scrutinizer]: https://scrutinizer-ci.com/organizations/graze/repositories
