<?php

$router->get('/', 'HomeController@login');
$router->get('/login', 'HomeController@login');
$router->get('/register', 'HomeController@register');
$router->get('/error', 'TestController@error');
$router->get('/test/index', 'TestController@index');

$router->post('/login', "AuthenticationController@login");
$router->post('/register', "AuthenticationController@register");