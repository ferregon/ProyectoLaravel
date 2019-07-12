<?php

Route::get('/', 'PageController@home')->name ('home');
Route::get('/product', 'ProductController@index')->name ('product');
Route::view('contact', 'contact')->name('contact');
Route::view('about', 'about')->name ('about');

Route::get('/contact', 'MessagesController@store');