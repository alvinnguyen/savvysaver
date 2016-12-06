<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', 'Frontend\CategoryController');

//Route::get('/category', 'Frontend\CategoryController@getIndex');
//Route::get('/category/create', 'Frontend\CategoryController@getCreate');
//Route::post('/category/create', 'Frontend\CategoryController@postCreate');