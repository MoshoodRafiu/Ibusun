<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\LoginController;



Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'showLogin')->name('login');
});