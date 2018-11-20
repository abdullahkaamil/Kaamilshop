<?php


/*
 * Admin Routes
 */
Route::prefix('admin')->group(function() {

    Route::middleware('auth:admin')->group(function() {
        // Dashboard
        Route::get('/', 'DashboardController@index');

        // Products
        Route::resource('/products','ProductController');

        // Orders
        Route::resource('/orders','OrderController');
        Route::get('/confirm/{id}','OrderController@confirm')->name('order.confirm');
        Route::get('/pending/{id}','OrderController@pending')->name('order.pending');

        // Users
        Route::resource('/users','UsersController');

        // Logout
        Route::get('/logout','AdminUserController@logout');

    });

    // Admin Login
    Route::get('/login', 'AdminUserController@index');
    Route::post('/login', 'AdminUserController@store');
});
 /*
  *  front End Routes
  *
  */
Route::get('/','Front\HomeController@index');

// user Registration


Route::get('/user/register','Front\RegistrationController@index');
Route::post('/user/register','Front\RegistrationController@store');

//user login

Route::get('/user/login','Front\SessionsController@index');
Route::post('/user/login','Front\SessionsController@store');

//user logout
Route::get('/user/logout','Front\SessionsController@logout');



Route::get('/user/profile', function (){
    return 'welcome user ';
});
