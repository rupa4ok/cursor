<?php
ini_set('default_charset', 'UTF-8');
mb_internal_encoding("UTF-8");
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
use App\Router\Router;
$dir = __DIR__ . '/www';
define('ROOT', dirname($dir));
include_once ROOT.'/vendor/autoload.php';
include_once ROOT.'/app/config/config.php';

$router = new Router();
$router->run();

include 'resource/xml/bd.php';

$movies = new SimpleXMLElement($xmlstr);