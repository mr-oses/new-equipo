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

//Route::get('/configDB', 'SitioController@configDB')->name('configDB');

Auth::routes();

Route::get('/', 'SitioController@index')->name('index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/donations', 'DonationController@index')->name('donations.index');
    Route::get('/donations/store', 'DonationController@store')->name('donations.store');
    Route::get('/donations/create', 'DonationController@create')->name('donations.create');
    Route::post('/donations/store', 'DonationController@store')->name('donations.store');
    Route::get('/donations/{id}/edit', 'DonationController@edit')->name('donations.edit');
    Route::post('/donations/{id}', 'DonationController@update')->name('donations.update');
    Route::post('/donations/{id}/destroy', 'DonationController@destroy')->name('donations.destroy'); //TODO Ver de implementar con AJAX.
});
