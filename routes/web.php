<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\DataSiswaController;
use App\http\Controllers\UserController;
use App\http\Controllers\BookController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('ADadsDASDASF', function(){
    return view('about');
})-> name('about');

Route::get('aSawdAD', function(){
    return view('post');
})-> name('post');

Route::get('sadasdasdsa', function(){
    return view('contact');
})->name('contact');

Route::resource('user', UserController::class);
Route::resource('book', BookController::class);
