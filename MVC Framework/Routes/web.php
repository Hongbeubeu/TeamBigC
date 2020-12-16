<?php

$router->get('/', 'HomeController@login');
$router->get('/login', 'HomeController@login');
$router->get('/register', 'HomeController@register');
$router->get('/newfeed', 'HomeController@newfeed');
$router->get('/profile/{id}', 'HomeController@profile');

$router->get('/logout', "AuthenticationController@logout");

$router->post('/login', "AuthenticationController@login");
$router->post('/register', "AuthenticationController@register");
$router->post('/status', 'PostController@status');
$router->post('/profile/update', 'ProfileController@update');
$router->post('/profile/updateAvt', 'ProfileController@updateAvt');

$router->get('/error', 'HomeController@error');
