<?php

//Replacement Auth::routes(); with useful routes only
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

//Admin routes for auth user only
Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', 'Admin\MainController@infoAdmin');
        
        Route::group(['prefix' => '/pages'], function () {
            Route::get('/', 'Admin\PageController@listPages');
            Route::get('new', 'Admin\PageController@listPages');
            Route::post('save', 'Admin\PageController@savePage');
        });
        
        Route::get('/page/{page_name}/edit', 'Admin\PageController@editPage');
        
        Route::post('/account/save', 'Admin\MainController@saveAdmin');
    });
});

//Site's routes
Route::get('/', function(){
    return view('site.index');
});