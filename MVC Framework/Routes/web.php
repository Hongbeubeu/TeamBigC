<?php

$router->get('/', 'TestController@index');
$router->get('/error', 'TestController@error');
$router->get('/test/index', 'TestController@index');
