<?php

Route::view('/', 'home')->name('home');

Route::view ('/contactame', 'contacto')->name('contacto');

Route::post('contacto', 'PagesController@mensajes');

Route::get('saludo/{nombre?}', ['as' => 'saludo', 'uses' =>'PagesController@saludo'])->where ('nombre', '[A-Za-z]+');
//Route::view('/saludo', 'PagesController@saludo')->name('saludo');

Route::get('mensajes/create', 'MessagesController@create')->name('mensajes.create');
Route::post('mensajes', 'MessagesController@store')->name('mensajes.store');