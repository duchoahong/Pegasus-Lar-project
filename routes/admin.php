<?php

Route::prefix('admin')->namespace('Admin\Auth')->group(function(){

    // Route::group(['middleware' => ['auth:admin']], function() {
    	Route::get('/','HomeController@index')->name('admin.home');
    // });
    //Login Routes
    Route::get('/login','LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','LoginController@login');
    Route::post('/logout','LoginController@logout')->name('admin.logout');
    //Forgot Password Routes
    Route::get('/password/reset','ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/email','ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    //Reset Password Routes
    Route::get('/password/reset/{token}','ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('/password/reset','ResetPasswordController@reset')->name('password.update');
});

Route::prefix('admin')->namespace('Admin')->group(function() {
    Route::get('/dashboard','AdminController@index')->name('admin.index');
});