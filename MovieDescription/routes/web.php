<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'movie');
Route::view('/actors', 'actors');
Route::view('/book', 'book');
Route::view('/director', 'director');
Route::view('/reviews', 'reviews');
