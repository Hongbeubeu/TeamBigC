<?php	

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
//http://localhost/MVC?url=items/viewall
$url = $_GET['url'];

require_once (ROOT . DS . 'library' . DS . 'bootstrap.php');
