<?php
/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () {
    return app()->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', ['uses' => 'Api\AuthController@register']);
    $router->post('login', ['uses' => 'Api\AuthController@login']);
    $router->post('logout', ['uses' => 'Api\AuthController@logout']);

    $router->get('get-info', ['uses' => 'Api\DataController@getInfo']);


    $router->group(['middleware' => 'auth'], function () use ($router) {
        $router->get('/user-profile', ['uses' => 'Api\AuthController@getUser']);

        $router->get('get-settings', ['uses' => 'Api\DataController@getSettings']);
        $router->post('set-settings', ['uses' => 'Api\DataController@setSettings']);
    });
});
