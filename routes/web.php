<?php

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

$app->get('/', function () use ($app) {
    return $app->app->version();
});
$app->group(['prefix' => 'api/'], function ($app) {
    $app->post('login/','ExampleController@authenticate');
    $app->post('user/','ExampleController@store');
    $app->get('allUser/','LoginController@getData');
    $app->post('Persona/', 'ExampleController@registrarPersona');
    $app->get('GetUser/{id}/', 'ExampleController@getUser');
    $app->get('/users', ['uses' => 'ExampleController@index']);
    $app->put('todo/{id}/', 'TodoController@update');
    $app->delete('todo/{id}/', 'TodoController@destroy');
    $app->put('userUpdate/{idPersona}/', 'ExampleController@updateUsers');
    $app->delete('delete/{idPersona}/', 'ExampleController@destroy');
});
$app->post('/pago', 'SuscripcionController@pago');
$app->get('buscar','DniController@buscar');
