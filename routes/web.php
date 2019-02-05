<?php

Route::get('/', 'IndexController@getHome')->name('home');
Route::post('/user/register/push', 'UserRegister@postRegister')->name('register');
Route::post('/user/otp', 'UserRegister@postOtp')->name('otp');