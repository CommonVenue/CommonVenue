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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// Auth::logout();
//
Route::group(['middleware' => array('auth')],function(){
	Route::get('/', 'HomeController@index');
	Route::get('/profile','UserController@index')->name('profile');
	Route::post('/profile','UserController@store')->name('profile.store');
	Route::put('/profile','UserController@update')->name('profile.update');
});