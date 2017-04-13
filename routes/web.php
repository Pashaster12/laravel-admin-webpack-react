<?php

//Replacement Auth::routes(); with useful routes only
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

//Admin routes for auth user only
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'Admin\Main@adminInfo');
});

//Site's routes
Route::get('/', function(){
    return view('site.index');      
});