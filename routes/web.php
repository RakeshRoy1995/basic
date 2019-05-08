<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('test' , 'test@show')->middleware('test');

Route::get('/pagination', 'test@index')->middleware('test');

Route::post('/insert', 'db@store');
Route::get('/view', 'db@show');
Route::get('/del/{id}', 'db@destroy');
Route::get('/edit/{id}', 'db@edit');
Route::post('/update/{id}', 'db@update');

Route::get('login/facebook', 'Auth\LoginController@redirectToProvider');
Route::get('login/facebook/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('paypal' , 'PaymentController@index');

Route::post('payment', 'PaymentController@payWithpaypal');

Route::get('execute_payment', 'PaymentController@getPaymentStatus');