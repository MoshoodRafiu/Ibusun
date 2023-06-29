<?php

namespace App\Http\Controllers\Seller;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLogin()
    {
        return Inertia::render('Seller/Auth/Login');
    }
}
