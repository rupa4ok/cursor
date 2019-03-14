<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 7:28
 */

use App\Router\Router;

include_once 'app/config/config.php';
include_once 'vendor/autoload.php';

define('ROOT', dirname(__FILE__));

$router = new Router();
$router->run();