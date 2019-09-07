<?php


Route::get('/', function () {
    return view('welcome');
});

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