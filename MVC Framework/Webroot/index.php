<?php
define('PATH_ROOT', str_replace("\Webroot", "",__DIR__));
define('DS', DIRECTORY_SEPARATOR);

//Autoload class
spl_autoload_register(function (string $class_name) {
    include_once PATH_ROOT . DS . $class_name . '.php';
});

//Load class Route
$router = new Core\Route();
//khi sql_autoload tìm thư mục theo namespace -> root/core/route.php
include_once PATH_ROOT . DS . 'Routes' . DS . 'web.php';

//Get current URL of web app
$request_url = !empty($_GET['url']) ? '/'. $_GET['url'] : '/';

//Get method of url is being called (GET | POST). Default: GET.
$method_url = !empty($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';

require(PATH_ROOT . DS . 'Config' . DS . 'core.php');

//Map URL with method
$router->map($request_url, $method_url);