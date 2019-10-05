<?php


/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/', 'WelcomeController@index')->middleware('auth');
	

//crear un nuevo usuario cliente
Route::redirect('/user/new', '/register');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/client', 'createUserController@load')->name('user.load');
Route::get('/client/all','clientController@index')->name('client.index');

Route::get('/client/{cliente}', 'clientController@show')->name('client.show');

Route::get('/provider', 'createUserController@load')->name('user.load');
Route::get('/provider/all','providerController@index')->name('provider.index');

Route::get('/provider/{proveedor}', 'providerController@show')->name('provider.show');

Route::get('/Productos','ProductoController@index');
Route::get('/Productos/{id}','ProductoController@show');
Route::get('/Productos/{id}','ProductoController@edit');
Route::get('/Productos/{id}','ProductoController@update');
Route::get('/Productos/{id}','ProductoController@destroy');

//rutas Factura
Route::get('/Factura', 'FacturaController@index'); //muestra datos de la tabla Facturas
Route::get('/Factura/crear', 'FacturaController@create');
Route::get('/Factura/store/request', 'FacturaController@store');
Route::get('/Factura/{id_factura}','FacturaController@show');


//rutas tarjetas
Route::get('/tarjeta','TarjetaController@vista');
Route::post('/tarjeta','TarjetaController@create');
Route::get('/Tarjeta/{numero_tarjeta}','TarjetaController@show');
Route::get('/Tarjeta/edit','TarjetaController@edit');
Route::get('/Tarjeta/destroy','TarjetaController@destroy');

//rutas tipos de usuario
Route::get('/TipoUsuario','TipoUsuarioController@index');
Route::get('/TipoUsuario/{id_tipo_usuario}','TipoUsuarioController@create');


//ruta de prueba, muestra formato de factura aun no muestra datos de la BD
Route::get('facturas', function() {
    return view('facturas');
})->name('facturas');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {
		Route::get('icons', ['as' => 'pages.icons', 'uses' => 'PageController@icons']);
		Route::get('tarjeta', ['as' => 'pages.tarjeta', 'uses' => 'PageController@tarjetas']);
		Route::get('maps', ['as' => 'pages.maps', 'uses' => 'PageController@maps']);
		Route::get('notifications', ['as' => 'pages.notifications', 'uses' => 'PageController@notifications']);
		Route::get('rtl', ['as' => 'pages.rtl', 'uses' => 'PageController@rtl']);
		Route::get('tables', ['as' => 'pages.tables', 'uses' => 'PageController@tables']);
		Route::get('typography', ['as' => 'pages.typography', 'uses' => 'PageController@typography']);
		Route::get('upgrade', ['as' => 'pages.upgrade', 'uses' => 'PageController@upgrade']);
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

