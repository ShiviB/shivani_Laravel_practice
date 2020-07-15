<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['namespace' => 'Admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {

    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('posts/create' ,'PostsController@create')->name('create');
    Route::post('posts/store', 'PostsController@store')->name('store');

});