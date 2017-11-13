<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function(){
	return view('login');
});

Route::get('/register', function(){
	return view('register');
});

Route::post('/register_akun', 'Daftar_AkunController@store');
Route::post('/login_check', 'Daftar_AkunController@sign');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
