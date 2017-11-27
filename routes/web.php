<?php

Route::get('/', 'HomeController@index')->name('home');
Route::get('/about', 'HomeController@about');
Route::get('/contacts', 'HomeController@contacts');
Route::post('/contacts', 'HomeController@sendMail');
Route::get('/reviews', 'ReviewController@list')->name('reviews');
Route::post('/reviews', 'ReviewController@store');
Route::post('/orders', 'OrderController@store')->name('orders');

Route::get('/training-courses/{name?}', 'SpecialityController@index')->name('speciality');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
