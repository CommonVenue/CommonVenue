<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/city/{comingSoonCity}', 'ComingSoonController@show');


Route::group(['middleware' => array('auth')],function(){
	Route::get('/home', 'HomeController@home');
	
	Route::get('/profile','UserController@index')->name('profile');
	Route::post('/profile','UserController@store')->name('profile.store');
	Route::put('/profile','UserController@update')->name('profile.update');

	Route::get('/properties', 'PropertiesController@index')->name('properties');
	Route::get('/properties/{property}', 'PropertiesController@show')->name('properties.show');

	Route::get('/properties/{property}/reviews', 'ReviewsController@index')->name('reviews');

	Route::get('/properties/{property}/booking', 'BookingController@index')->name('booking');

	Route::get('/payment', 'PaymentController@payWithStripe')->name('make:payment');
});