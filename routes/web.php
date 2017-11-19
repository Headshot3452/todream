<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');
Route::get('/contacts', 'HomeController@contacts');
Route::get('/reviews', 'ReviewsController@list');

Route::get('/training-courses/{name?}', 'SpecialityController@index')->name('speciality');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
