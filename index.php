<?php

use Framework\Core\Router;

require __DIR__ . '/vendor/autoload.php';

session_start();

$router = new Router();
$router->run();