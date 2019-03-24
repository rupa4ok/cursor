<?php
use App\Router\Router;
use App\storage\DbStorage;

$dir = __DIR__ . '/app/';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
echo $router->run();

$pdo = new DbStorage($options);



print_r($pdo->load());