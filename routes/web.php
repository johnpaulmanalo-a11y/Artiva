<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

Route::get('/characters', function() {
    return view('characters');
})->name('characters');

Route::view('/about', 'about')
    ->name('about');