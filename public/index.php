<?php

declare(strict_types=1);

require_once __DIR__ . "/../vendor/autoload.php";

// ini_set('display_errors', '1');
// ini_set('display_startup_errors', '1');
// error_reporting(E_ALL);

use App\Code\World;

try {
    $world = new World();
    $world->Hello();
} catch (Exception $e) {
    echo $e->getMessage();
}
