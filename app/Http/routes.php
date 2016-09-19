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

Route::get('/', 'IndexController@index');

Route::resource('pieza', 'PiezaController');

Route::resource('marca_pieza', 'Marca_PiezaController');

Route::resource('categoria', 'CategoriaController');

Route::resource('pieza_vehiculo', 'Pieza_VehiculoController');

Route::resource('vehiculo', 'VehiculoController');

Route::resource('marca_vehiculo', 'Marca_VehiculoController');

Route::resource('proveedor', 'ProveedorController');

Route::resource('pedido', 'PedidoController');

Route::resource('detalle_pedido', 'Detalle_PedidoController');