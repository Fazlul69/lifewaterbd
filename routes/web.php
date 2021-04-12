<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('loginFail');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Dashboard
Route::get('home','App\Http\Controllers\DashboardController@index');

//client
Route::get('home/client','App\Http\Controllers\ClientController@index')->name('client.index');
Route::post('home/client','App\Http\Controllers\ClientController@store')->name('client.store');

//ROS
//web
Route::get('/reverse','App\Http\Controllers\ROSController@index')->name('ros');
//admin
Route::get('home/reverse','App\Http\Controllers\Admin\ReverseController@index')->name('ro.index');
Route::post('home/reverse','App\Http\Controllers\Admin\ReverseController@store')->name('ro.store');

//under 
//admin
Route::get('home/under','App\Http\Controllers\Admin\UnderCounterController@index')->name('under.index');
Route::post('home/under','App\Http\Controllers\Admin\UnderCounterController@store')->name('under.store');
// web
Route::get('/under','App\Http\Controllers\UnderController@index')->name('under');