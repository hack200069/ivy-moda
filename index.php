<?php
require 'model/database.php';
$db = new Database();

define('PATH_ROOT', __DIR__);
define('SCRIPT_ROOT', 'http://localhost/ivy-moda');
spl_autoload_register(function (string $class_name) {
	include_once PATH_ROOT . '/' . $class_name . '.php';
});
$router = new Core\Http\Route();
include_once PATH_ROOT . '/app/routes.php';
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
$router->map($request_url, $method_url);

$db->closeDatabase();
