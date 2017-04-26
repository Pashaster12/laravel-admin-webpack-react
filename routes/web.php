<?php

//Replacement Auth::routes(); with useful routes only
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

//Admin routes for authorized admin only
Route::group(['middleware' => 'auth'], function () {
    
    Route::group(['prefix' => '/admin'], function () {
        Route::get('/', 'Admin\AdminController@infoAdmin');
        Route::post('/account/save', 'Admin\AdminController@saveAdmin');
        
        Route::group(['prefix' => '/pages'], function () {
            Route::get('/', 'Admin\PageController@listPages');
            Route::get('new', 'Admin\PageController@editPage');
            Route::post('save', 'Admin\PageController@savePage');
        });
        
        Route::get('/page/{page_name}/edit', 'Admin\PageController@editPage');
        
        //Deleting different types of objects with universal method
        Route::post('/{object_alias}/{object_id}/delete', 'Admin\Ajax\MainController@deleteObject');
    });
});

//Site's routes
Route::get('/{slug?}', 'Site\PageController@showPage');