# phpapp

This is a bare bones template repository to create your own php project with phpunit unit testing and PSR-4 autoloading preconfigured.

The repo also has a .gitignore configured for PHP projects.

## Creating a repo from this template

from the public `aregsar/phpapp` template we can use gh (github cli) to create

a new remote repository based on the template and clone it.

I have created a bash function that does this.

```bash
function gh_create_private_remote_repo_and_clone_from_template_repo_phpapp() {
 if ! [ $# -eq 0 ]
 then
    reponame=$1
    gh repo create $reponame --private --clone --template aregsar/phpapp
    cd $reponame
    gh repo view --web
 fi
}
```

Add the function to your bash configuration dotfile.

## Create and clone with gh

Login to github with gh.

Call the bash function to create the repo and clone it.

The argument is the name of the repo we want to create.

```bash
gh_create_private_remote_repo_and_clone_from_template_repo_phpapp myphpapp
```

Logout using gh.

## Installing phpunit

After we created and cloned the repo we need to install the phpunit package.

```bash
composer require --dev phpunit/phpunit
```

## Running tests

We can run the example unit test

using phpunit directly:

```bash
vendor/bin/phpunit
```

Or with the composer script:

```bash
composer test
```

## Running Code

We can run the example code using the php cli.

```bash
php public/index.php
```

## Additional packages to install

The following are some of the most common packages used in PHP apps that extend the basic featurs of the language.

To load environment variables through the .env file:

```bash
composer require vlucas/phpdotenv
```

For logging:

```bash
composer require monolog/monolog
```

For error handling:

```bash
composer require filp/whoops
```

For making HTTP requests:

```bash
composer require guzzlehttp/guzzle
```

For date time functions:

```bash
composer require nesbot/carbon
```

For UUID or GUID generation:

```bash
composer require ramsey/uuid
```
