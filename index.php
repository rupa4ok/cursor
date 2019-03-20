<?php
use App\Router\Router;

$dir = __DIR__ . '/www';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
echo $router->run();