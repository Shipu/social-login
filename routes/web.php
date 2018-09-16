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

Route::view('/', 'welcome');

Route::get('login/kakao', 'Auth\LoginController@redirectToProvider');
Route::get('oauth', 'Auth\LoginController@handleProviderCallback');
