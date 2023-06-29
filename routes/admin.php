<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;

Route::controller(LoginController::class)->group(function () {
  Route::get('/login', 'showLogin');
});