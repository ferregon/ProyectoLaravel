<?php


	Route::get('test', function(){
	$user = new App\User;
	$user->name = 'rrhh';
	$user->role_id = '2';
	$user->email = 'ara@gmail.com';
	$user->password = bcrypt('12345');
	$user->save();
	return $user;
	});
/*
	App\User::create([
		'name' => 'Javier',
		'role' => 'moderador'
		'email' => 'javier@gmail.com',
		'password' => bcrypt('12345'),
		,
	]);
*/
Route:: get ('roles', function(){
	return \App\Role::with('user')->get();
});

Route::view('/', 'home')->name('home');
Route::get('product', 'ProductoController@index')->name('producto.index');
Route::get('product/create', 'ProductoController@create')->name('producto.create');
Route::get('product/{id}', 'ProductoController@show')->name('producto.show');
Route::post('product', 'ProductoController@store')->name('producto.store');
Route::get('product/{id}/edit', 'ProductoController@edit')->name('producto.edit');
Route::delete('product/{id}', 'ProductoController@destroy')->name('producto.destroy');
Route::put('product/{id}', 'ProductoController@update')->name('producto.update');




Route::resource('mensajes', 'MessagesController');

Route::resource('usuarios', 'UsersController');

Route::get('login', 'Auth\LoginController@showLoginForm');
Route::post('login', 'Auth\LoginController@login')->name('login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
/*
	Route::get('mensajes', 'MessagesController@index')->name('mensajes.index');
	Route::get('mensajes/create', 'MessagesController@create')->name('mensajes.create');
	Route::post('mensajes', 'MessagesController@store')->name('mensajes.store');
	Route::get('mensajes/{id}', 'MessagesController@show')->name('mensajes.show');
	Route::get('mensajes/{id}/edit', 'MessagesController@edit')->name('mensajes.edit');
	Route::put('mensajes/{id}', 'MessagesController@update')->name('mensajes.update');
	Route::delete('mensajes/{id}', 'MessagesController@destroy')->name('mensajes.destroy');
*/

