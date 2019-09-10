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

Route::get('/', 'HomeController@index')->name('welcome');
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/city/{comingSoonCity}', 'ComingSoonController@show');
Route::post('/subscribe', 'SubscribersController@store')->name('subscribe');

Route::get('/properties', 'PropertiesController@index')->name('properties');
Route::get('/properties/{property}/show', 'PropertiesController@show')->name('properties.show');


Route::group(['middleware' => array('auth')],function(){
	Route::get('/home', 'HomeController@home');
	
	Route::get('/profile','UserController@index')->name('profile');
	Route::post('/profile','UserController@store')->name('profile.store');
	Route::put('/profile','UserController@update')->name('profile.update');
	
	Route::get('/properties/create', 'PropertiesController@create')->name('properties.create');
	Route::post('/properties/store', 'PropertiesController@store')->name('properties.store');
	Route::get('/properties/{property}/edit', 'PropertiesController@edit')->name('properties.edit');
	Route::put('/properties/{property}', 'PropertiesController@update')->name('properties.update');
	
	Route::post('/property/images/store', 'PropertyImagesController@store');
	Route::post('/property/working-hours/store', 'WorkingHoursController@store');
	Route::post('/property/contact-person/store', 'ContactPersonsController@store');

	Route::prefix('favorite')->name('favorite.')->group(function() {
	    Route::get('/properties', 'PropertiesController@favorites')->name('properties.favorites');
	    Route::get('/properties/{property}', 'PropertiesController@toggleFavorite')->name('properties.toggle');
	});
    
    Route::get('/properties/category/{category}', 'CategoriesController@index')->name('properties.category');

	Route::post('/addresses/store', 'AddressesController@store')->name('addresses.store');
	Route::put('/addresses/{address}', 'AddressesController@update')->name('addresses.update');

	Route::get('/properties/{property}/reviews', 'ReviewsController@index')->name('reviews');

	Route::get('/bookings', 'BookingController@index')->name('bookings');
	Route::get('/properties/{property}/booking/{booking}', 'BookingController@show')->name('booking.show');
	Route::get('/properties/{property}/bookings', 'BookingController@property_bookings')->name('property.bookings');

	Route::get('/properties/{property}/booking', 'BookingController@create')->name('booking.create');
	Route::post('/properties/{property}/booking', 'BookingController@store')->name('booking.store');

	Route::get('/properties/{property}/booking/{booking}/edit', 'BookingController@edit')->name('booking.edit');
	Route::put('/properties/{property}/booking/{booking}', 'BookingController@update')->name('booking.update');

	Route::get('/payment', 'PaymentController@payWithStripe')->name('make:payment');
	Route::post('/payment', 'PaymentController@payment');
	Route::get('/subscription', 'PaymentController@subscription');
	Route::post('/process-subscription', 'PaymentController@process_subscription');
	Route::get('/invoices', 'PaymentController@invoices'); 
	Route::get('/invoice/{invoice_id}', 'PaymentController@invoice');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
