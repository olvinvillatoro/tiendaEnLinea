<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/new', 'createUserController@load');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

// Rutas para Producto
Route::get('/Productos','ProductoController@index');
Route::get('/Producto/{id}','ProductoController@detalle');
Route::get('/Productos/Insertar','ProductoController@Insertar');
Route::get('/Productos/Eliminar/{id}','ProductoController@eliminar');
Route::get('/Productos/Editar/{id}','ProductoController@editar');
//Route::get('/Productos/{id}','ProductoController@update');

//Rutas para Marca
Route::get('/Marcas','MarcaController@index');
Route::get('/Marca/{id}','MarcaController@detalle');
Route::get('/Marcas/Insertar','MarcaController@Insertar');
Route::get('/Marcas/Eliminar/{id}','MarcaController@eliminar');
Route::get('/Marcas/Editar/{id}','MarcaController@editar');



//Routes para Factura
Route::get('/facturas','FacturaController@index');
Route::get('/facturas/create','FacturaController@create');//Crea la Factura
Route::post('facturas','FacturaController@store');//Procesa la peticion
Route::get('/facturas/{factura}','FacturaController@show');//Mostrar detalle de Factura


