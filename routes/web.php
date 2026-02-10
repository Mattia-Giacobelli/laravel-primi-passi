<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/Profile', function () {
    return view('profile');
})->name('profile');

Route::get('/Dashboard', function () {
    return view('dashboard');
})->name('dashboard');
