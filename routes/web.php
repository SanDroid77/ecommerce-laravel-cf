<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'MainController@home');

Auth::routes();

Route::resource('products', 'ProductsController');

/*
  GET /products => index
  POST /products => store
  GET /products/create => Formulario para crear
  GET /products/:id => Mostrar el producto con ID
  GET /products/:id/edit => Formulario para editar
  PUT/PATCH /products/:id => actualiza
  DELETE /products/:id => Elimina
*/

Route::get('/home', 'HomeController@index');
