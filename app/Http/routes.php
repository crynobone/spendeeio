<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use Illuminate\Routing\Router;

$router->group(['domain' => get_meta('tenant::domain'), 'middleware' => 'tenant'], function (Router $router) {
    $router->get('/', 'WelcomeController@index');
});

$router->get('/', 'WelcomeController@index');