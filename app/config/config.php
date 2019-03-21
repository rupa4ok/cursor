<?php
/**
 * Created by PhpStorm.
 * User: rupak
 * Date: 14.03.2019
 * Time: 4:58
 */

session_id() ?: session_start();

ini_set('default_charset', 'UTF-8');
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

const DB_XML = 'resource/xml/bd.php';
const DB_CONFIG = "mysql:host=localhost; dbname=vseojkt; charset=utf8', 'test', 'password";

if ($_SERVER['SERVER_NAME'] === "tabel-refresh.herokuapp.com") {
    $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $host = $url["host"];
    $username = $url["user"];
    $password = $url["pass"];
    $dbname = substr($url["path"], 1);
} else {
    $host = 'localhost';
    $dbname = 'db';
    $username = 'user';
    $password = '123';
}
