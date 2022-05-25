<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function (){

    Route::get('/', 'StartController@home')->name('home');

    Route::get('/create-habit', 'HabitController@userPanel')->name('create-habit');

    Route::get('/login', 'AuthController@showLoginForm')->name('login');
    Route::get('/logout', 'AuthController@logout')->name('logout');
    Route::post('/login_process', 'AuthController@login')->name('login_process');

    Route::get('/register', 'AuthController@showRegisterForm')->name('register');
    Route::post('/register_process', 'AuthController@register')->name('register_process');

});

