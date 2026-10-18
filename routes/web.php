<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::view('/characters', 'characters')
    ->name('characters');

Route::view('/about', 'about')
    ->name('about');