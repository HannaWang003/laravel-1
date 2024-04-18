<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuyhouseController;

Route::get('/', function () {
    // return view('welcome');
    return view('welcome');
})->name('home');
Route::resource('buyhouses', BuyhouseController::class);
