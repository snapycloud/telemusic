<?php


Route::get('/', 'IndexController@getHome')->name('home');
Route::post('user/register/push', 'UserRegister@postRegister')->name('register');
Route::post('', 'UserRegister@sendClientOtp')->name('otp.send');
Route::post('/event', 'UserRegister@postOtp')->name('otp.check');

Route::get('/landing', 'Controller@getLanding');
