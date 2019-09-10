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


Route::get('/Productos','ProductoController@index');
Route::get('/Productos/{id}','ProductoController@show');
Route::get('/Productos/{id}','ProductoController@edit');
Route::get('/Productos/{id}','ProductoController@update');
Route::get('/Productos/{id}','ProductoController@destroy');

//Routes para Factura
Route::get('/facturas','FacturaController@index');
Route::get('/facturas/create','FacturaController@create');//Crea la Factura
Route::post('facturas','FacturaController@store');//Procesa la peticion
Route::get('/facturas/{factura}','FacturaController@show');//Mostrar detalle de Factura


