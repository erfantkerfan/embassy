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

Route::get('/','Controller@home')->name('home');
Route::get('/contactus','Controller@contactus')->name('contactus');
Route::get('/france','Controller@france')->name('france');