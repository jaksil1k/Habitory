<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function (){

    Route::get('/', 'StartController@home')->name('home');
    Route::get('/categories', 'StartController@categories')->name('categories');

    Route::middleware("auth")->group(function() {
        Route::get('/logout', 'AuthController@logout')->name('logout');
        Route::get('/create-habit', 'HabitController@userPanel')->name('create-habit');
    });

    Route::middleware("guest")->group(function() {
        Route::get('/login', 'AuthController@showLoginForm')->name('login');
        Route::post('/login_process', 'AuthController@login')->name('login_process');

        Route::get('/register', 'AuthController@showRegisterForm')->name('register');
        Route::post('/register_process', 'AuthController@register')->name('register_process');
    });
});

