<?php
use App\Router\Router;

define('ROOT', dirname($dir));
$dir = __DIR__ . '/www';
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
echo $router->run();
