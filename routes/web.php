<?php

/*
 * admin routes
 */


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


// admin login
     Route::get ('/admin/login','AdminUserController@index');
     Route::post ('/admin/login','AdminUserController@store');



 /*
  *  front End Routes
  *
  */
