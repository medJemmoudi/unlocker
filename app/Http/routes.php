<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
*/

Route::when('*', 'csrf', array('post', 'put', 'delete'));


Route::get('/', 'WelcomeController@index');
Route::post('unlock', 'WelcomeController@addUnlock');

Route::get('home', 'HomeController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);


Route::group(['prefix' => 'admin'], function()
{
	Route::get('devices', 'DeviceController@index');
	Route::post('new_device', 'DeviceController@create'); 
	Route::get('delete_device/{device}', 'DeviceController@destroy');

	Route::get('emails', 'EmailController@index');
	Route::get('settings', 'SettingController@index');
	Route::get('languages', 'LangueController@index');
	Route::get('transactions', 'TransactionController@index');


});
