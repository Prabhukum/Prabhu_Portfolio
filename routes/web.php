<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
})->name('home');

Route::post('/contact/store', [UserController::class, 'store'])->name('contact.store');
