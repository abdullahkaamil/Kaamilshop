<?php
//Dashboard
Route::get('/','DashboardController@index');
//product
Route::resource('/products','ProductController');
// orders

Route::resource('/orders','OrderController');
Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
Route::get('/pending/{id}','OrderController@pending')->name('order.pending');



//users
Route::resource('/users','UsersController');
