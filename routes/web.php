<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/create-habit', function () {
    return view('create-habit');
})->name('create-habit');

Route::post('/register/submit', 'RegisterController@submit')->name('register-form');
