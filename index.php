<?php
define('ROOT', dirname($dir));
$dir = __DIR__ . '/www';
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

use App\Router\Router;

$router = new Router();
echo $router->run();
