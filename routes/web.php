<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('portfolio');
});


Route::post('/contact/store', [UserController::class, 'store'])->name('contact.store');
