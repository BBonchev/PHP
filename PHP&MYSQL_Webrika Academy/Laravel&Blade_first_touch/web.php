<?php

Route::get('/', 'HomeController@index');

Route::get( 'register', 'AuthController@showRegisterForm');
Route::post('register', 'AuthController@postRegisterForm');

Route::get( 'login', 'AuthController@showLoginForm');
Route::post('login', 'AuthController@postLoginForm');

Route::post('logout', 'AuthController@logout');