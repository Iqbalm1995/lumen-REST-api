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

$router->post('/api/produk/post', 'ProdukController@create');
$router->get('/api/produk/', 'ProdukController@index');
$router->get('/api/produk/{id}', 'ProdukController@show');
$router->put('/api/produk/update/{id}', 'ProdukController@update');
$router->delete('api/produk/delete/{id}', 'ProdukController@delete');

$router->post('/api/register', 'UserController@register');
$router->post('/api/login', 'UserController@login');