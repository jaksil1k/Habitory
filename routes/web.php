<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'App\Http\Controllers'], function (){

    Route::get('/', 'StartController@home')->name('home');

    Route::get('/create-habit', 'UserController@userPanel')->name('create-habit');
});

