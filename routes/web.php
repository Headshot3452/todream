<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contacts', 'HomeController@contacts');
Route::get('/reviews', 'ReviewController@list')->name('reviews');
Route::post('/reviews', 'ReviewController@store');

Route::get('/training-courses/{name?}', 'SpecialityController@index')->name('speciality');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
