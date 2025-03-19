<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () {
    return app()->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', ['uses' => 'Api\AuthController@register']);
    $router->post('login', ['uses' => 'Api\AuthController@login']);
    $router->post('logout', ['uses' => 'Api\AuthController@logout']);

    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/user-profile', ['uses' => 'Api\AuthController@getUser']);
    });
});
