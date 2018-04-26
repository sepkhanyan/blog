<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();


Route::group(['middleware' => ['web', 'auth']], function () {

    Route::group(['prefix' => '/'], function () {
        Route::get('', 'UserController@index');

        Route::group(['prefix' => 'user'], function () {
            Route::get('create', 'UserController@create');
            Route::post('store', 'UserController@store');
            Route::get('edit/{id}', 'UserController@edit');
            Route::post('update/{id}', 'UserController@update');
            Route::get('delete/{id}', 'UserController@destroy');
        });

        Route::group(['prefix' => 'post'], function () {
            Route::get('', 'PostController@index');
            Route::get('create', 'PostController@create');
            Route::post('store', 'PostController@store');
            Route::get('delete/{id}', 'PostController@destroy');
            Route::get('show/{id}', 'PostController@show');
            Route::get('edit/{id}', 'PostController@edit');
            Route::post('update/{id}', 'PostController@update');
        });

    });
});
