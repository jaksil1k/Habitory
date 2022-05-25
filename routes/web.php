<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/statistics', function () {
    return view('statistics');
})->name('statistics');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register/submit', 'RegisterController@submit')->name('register-form');
