<?php

use Illuminate\Support\Facades\Route;

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

//countries
/*Route::get('countries', 'CountryController@index')->name('countries.index');


Route::get('countries/create', 'CountryController@create');
Route::post('countries', 'CountryController@store');
Route::delete('countries/{country}', 'CountryController@destroy');
Route::get('countries/{country}', 'CountryController@show')->name('countries.show');*/



//places
/*Route::get('places', 'PlaceController@index')->name('places.index');

Route::get('places/create', 'PlaceController@create');
Route::post('places', 'PlaceController@store');



Route::get('places/{place}/edit','PlaceController@edit');

Route::patch('places/{place}', 'PlaceController@update');




Route::get('places/{place}', 'PlaceController@show')->name('places.show');*/



//bookings
/*Route::get('bookings', 'BookingController@index')->name('bookings.index');

Route::get('bookings/create', 'BookingController@create');

Route::post('bookings', 'BookingController@store');

Route::get('bookings/show', 'BookingController@show')->name('bookings.show');*/




//feedbacks
/*Route::get('feedbacks', 'FeedbackController@index')->name('feedbacks.index');

Route::get('feedbacks/create', 'FeedbackController@create');

Route::post('feedbacks', 'FeedbackController@store');

Route::get('feedbacks/show', 'FeedbackController@show')->name('feedbacks.show');*/


Route::resource('places', 'PlaceController');

Route::delete('places/{place}', 'PlaceController@destroy');


Route::get('places/manage', 'PlaceController@showDeleted');

Route::get('places/{place}/forceDelete', 'PlaceController@forceDelete');

Route::get('places/{place}/restore', 'PlaceController@restore');


Route::resource('countries', 'CountryController');

Route::resource('bookings', 'BookingController');

Route::resource('feedbacks', 'FeedbackController');
