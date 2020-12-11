<?php

$router->get('/', 'HomeController@login');
$router->get('/login', 'HomeController@login');
$router->get('/register', 'HomeController@register');
$router->get('/newfeed', 'HomeController@newfeed');
$router->get('/ind', 'HomeController@index');

$router->get('/logout', "AuthenticationController@logout");

$router->post('/login', "AuthenticationController@login");
$router->post('/register', "AuthenticationController@register");