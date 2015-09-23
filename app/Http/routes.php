<?php

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::resource('/', 'PagesController');

Route::get('/users', 'PagesController@users');
Route::get('/user/{id}', 'PagesController@user');

Route::get('/edit_role/{id}', 'PagesController@edit_role');
Route::post('/edit_role/{id}', 'PagesController@update_role');

