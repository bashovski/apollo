<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'PropertiesController@index')->name('home');
Route::get('/myaccount', 'UsersController@show')->name('myaccount')->middleware('auth');
Route::group([
    'prefix' => '/properties'
], function() {
    Route::get('/create', 'PropertiesController@create')->name('property.create');
});

Route::patch('/users/update', 'UsersController@update')->name('user.update')->middleware('auth');

Route::get('/test', function() {
    return view('test');
});
