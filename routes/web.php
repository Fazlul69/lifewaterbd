<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@authenticate')->name('login');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('loginFail');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@logout')->name('logout');

Route::get('/', 'App\Http\Controllers\HomeController@index');

// Dashboard
Route::get('home/item','App\Http\Controllers\DashboardController@index');