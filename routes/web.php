<?php


Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
//crear un nuevo usuario cliente
Route::redirect('/user/new', '/register');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client', 'createUserController@load')->name('user.load');
Route::get('/client/all','clientController@index')->name('client.index');

Route::get('/client/{cliente}', 'clientController@show')->name('client.show');

Route::get('/provider', 'createUserController@load')->name('user.load');
Route::get('/provider/all','providerController@index')->name('provider.index');

Route::get('/provider/{proveedor}', 'providerController@show')->name('provider.show');
=======

Route::get('/Productos','ProductoController@index');
Route::get('/Productos/{id}','ProductoController@show');
Route::get('/Productos/{id}','ProductoController@edit');
Route::get('/Productos/{id}','ProductoController@update');
Route::get('/Productos/{id}','ProductoController@destroy');
>>>>>>> a30bc7b96f2fa0212cc6c6f3d07d1dddae04d6d7
