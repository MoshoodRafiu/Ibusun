<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Vendor\LoginController;



Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'showLogin');
});