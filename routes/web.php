<?php
// Route::get('/', 'IndexController@getHome')->name('home');
// Route::post('user/register/push', 'UserRegister@postRegister')->name('register');
// Route::post('/event', 'UserRegister@postOtp')->name('otp.check');
// Route::get('/terms', 'Controller@getLanding')->name('terms');

Route::get('/', 'Controller@getLanding');
Route::post('/send/otp', 'UserRegister@sendClientOtp');
Route::post('/event/live', 'UserRegister@getEvent');

Route::post('user/register', 'UserRegister@postRegister'); 
Route::post('support/ticket', 'Controller@postCase'); 