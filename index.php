<?php

declare(strict_types=1);

require_once __DIR__ . "/vendor/autoload.php";

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

// (composer require vlucas/phpdotenv)
// use Dotenv\Dotenv;

// (composer require monolog/monolog)
// use Monolog\Logger;
// use Monolog\Level;
// use Monolog\Handler\StreamHandler;

use App\Code\World;

try {

    //
    // load .env settings:
    // $dotenv = Dotenv::createUnsafeImmutable(__DIR__);
    // $dotenv->load();
    // $appName = getenv('APP_NAME');
    //

    //
    // logging
    // $logger = new Logger('log');
    // $logger->pushHandler(new StreamHandler(__DIR__ . "/logfile.log", Level::Debug));
    // $logger->info($appName);
    //

    // application code
    $world = new World();
    $world->Hello();
} catch (Throwable $e) {
    echo $e->getMessage();
}
