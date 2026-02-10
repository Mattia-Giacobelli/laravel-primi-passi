<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    $info = 'Questa è la home';

    return view('home', compact('info'));
})->name('home');

Route::get('/Profile', function () {

    $info = 'Questa è la pagina del profilo';

    return view('profile', compact('info'));
})->name('profile');

Route::get('/Dashboard', function () {

    $info = 'Questa è la dashboard';

    return view('dashboard', compact('info'));
})->name('dashboard');
