<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\LoginController;
use App\Http\Controllers\Seller\RegisterController;



Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'showLogin')->name('login');
  Route::post('/login', 'login');
});

Route::controller(RegisterController::class)->group(function () {
  Route::get('/register', 'showRegister')->name('register');
  Route::post('/register', 'register');
});