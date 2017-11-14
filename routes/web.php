<?php

Route::get('/', 'HomeController@index');
Route::get('/about', 'HomeController@about');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
