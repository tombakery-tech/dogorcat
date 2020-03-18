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


Route::get('index', 'DogorcatController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('comment', 'DogorcatController@comment');

Route::get('error', 'DogorcatController@error');

Route::get('profile', 'ProfileController@profile');

Route::get('profile/email', 'ProfileController@email');

Route::get('profile/password', 'ProfileController@password');