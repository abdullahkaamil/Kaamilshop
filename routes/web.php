<?php
//Dashboard
Route::get('/','DashboardController@index');
//product
Route::resource('/products','ProductController');