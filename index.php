<?php
use App\Router\Router;

$dir = __DIR__ . '/app/';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
echo $router->run();

echo $url = parse_url(getenv('CLEARDB_DATABASE_URL'));
