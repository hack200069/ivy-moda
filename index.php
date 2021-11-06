<?php
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
include_once('app/models/Database.php');
$db = new \App\Models\Database();

define('PATH_ROOT', __DIR__);
define('SCRIPT_ROOT', 'http://localhost/ivy-moda');
include_once('config/config.php');
include_once('lib/function.php');
spl_autoload_register(function (string $class_name) {
	include_once(PATH_ROOT . '/' . $class_name . '.php');
});
$router = new Core\Http\Route();
$init = new App\Controllers\InitController();
define('CATEGORY', $init->initCategory());
include_once(PATH_ROOT . '/app/routes.php');
$request_url = !empty($_GET['url']) ? '/' . $_GET['url'] : '/';
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

$router->map($request_url, $method_url);

$db->closeDatabase();