<?php

$router->get('/', 'HomeController@login');
$router->get('/login', 'HomeController@login');
$router->get('/register', 'HomeController@register');
$router->get('/newfeed', 'HomeController@newfeed');
$router->get('/status/{id}', 'HomeController@status');
$router->get('/profile/{id}', 'HomeController@profile');

$router->get('/logout', "AuthenticationController@logout");

$router->post('/login', "AuthenticationController@login");
$router->post('/register', "AuthenticationController@register");
$router->post('/status', 'PostController@post');
$router->post('/edit-post', 'PostController@editPost');
$router->post('/profile/update', 'ProfileController@update');
$router->post('/deletePost', 'PostController@deletePost');
$router->post('/profile/updateAvt', 'ProfileController@updateAvt');

$router->post('/create-group', 'GroupController@createGroup');
$router->get('/group/{groupId}', 'HomeController@group');
$router->post('/edit-group', 'GroupController@editGroup');

$router->get('/error', 'HomeController@error');

//call Ajax for comment and like/unlike post
$router->post('/ajax-comment', 'AjaxEndpoint@comment');
$router->post('/ajax-like', 'AjaxEndpoint@like');
$router->post('/ajax-unlike', 'AjaxEndpoint@unlike');
$router->post('/ajax-follow', 'AjaxEndpoint@follow');
$router->post('/ajax-unfollow', 'AjaxEndpoint@unfollow');
$router->post('/ajax-join-group', 'AjaxEndpoint@joinGroup');
$router->post('/ajax-leave-group', 'AjaxEndpoint@leaveGroup');

$router->post('/donate', 'DonateController@donate');
$router->get('/search', 'HomeController@search');


