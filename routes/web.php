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
