<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('portfolio');
});

Route::post('/contact/store', [UserController::class, 'store'])->name('contact.store');
