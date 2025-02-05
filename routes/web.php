<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->name('index');

Route::resource('authors', AuthorController::class);
Route::resource('books', BookController::class);
