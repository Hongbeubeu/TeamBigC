<?php

$router->get('/', 'HomeController@login');
$router->get('/error', 'TestController@error');
$router->get('/test/index', 'TestController@index');

$router->post('/login', "AuthenticationController@login");