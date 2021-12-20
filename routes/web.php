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

Auth::routes();

Route::get('/', 'SitioController@index')->name('index');
Route::get('/home', 'HomeController@index')->name('home');


Route::get('/donations', 'DonationController@index')->name('donations.index')->middleware('auth');
Route::get('/donationsa/store', 'DonationController@store')->name('donations.store')->middleware('auth');
/*
Route::get('/admin/services', 'Admin\ServiceController@index')->name('admin.services');
    Route::get('/admin/services/create', 'Admin\ServiceController@create')->name('admin.services.create');
    Route::get('/admin/services/{id}/edit', 'Admin\ServiceController@edit')->name('admin.services.edit');
    Route::post('/admin/services/{id}', 'Admin\ServiceController@update')->name('admin.services.update');
    Route::delete('/admin/services/{id}', 'Admin\ServiceController@destroy')->name('admin.services.destroy'); */
