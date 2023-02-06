<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});
$router->group(['prefix' => 'api'], function () use ($router) {
    $router->post('register', 'AuthController@register');
    $router->post('login', 'AuthController@login');
    $router->get('view-qr/{key}', 'QRController@QRview');

    $router->group(['middleware' => 'jwtverification'], function()use ($router)  {
        $router->post('generate-qr', 'QRController@QRgenerate');
        $router->post('generate-qr/{template_id}', 'QRController@QRgenerate');
        $router->get('view-user-qr', 'QRController@viewallQR');
        $router->get('get-history/{key}', 'QRController@getQRHistory');
        $router->post('edit-qr', 'QRController@editQR');
        $router->post('delete-qr/{id}', 'QRController@deleteQR');
        $router->post('logout', 'AuthController@logout');
});

});