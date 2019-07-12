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
Route::get('product/{nombre?}', ['as' => 'producto', 'uses' =>'PagesController@product'])->where ('nombre', '[A-Za-z]+');

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

