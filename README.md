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

This template includes the `index.php` bootstrap file in the project root and also include the `public/index.php` bootstrap file in the public subdirectory.

You can decide which one you want to use as your bootstrap file and remove the other.

We can run the example code below using the php cli depending on which index.php file we are using:

```bash
# runs index.php in application root
php index.php

# runs public/index.php
php public/index.php
```

Or we can run the code running a local php server and navigating to localhost:8000 or localhost:8000/public depending on which index.php file we are using:

```bash
# serves index.php in application root
php -S localhost:8000

# serves public/index.php
php -S localhost:8000 -t public/
```

## Adding package to support .env file loading

Install the following package to load environment variables through the .env file.

```bash
composer require vlucas/phpdotenv
```

In the project root rename .env.example file to .env

```bash
mv .env.example .env
```

After installing the package you can uncomment code in the index.php file or public/index.php to load the .env file.

## Adding package for logging

Install the following package to use the monolog logger in your application.

```bash
composer require monolog/monolog
```

After installing the package you can uncomment code in the index.php or public/index.php file that demonstrates usage of the logger.

## Additional packages to install

The following are other common packages used in PHP apps.

For displaying error information during development for uncaught exceptions:

```bash
composer require --dev filp/whoops
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
