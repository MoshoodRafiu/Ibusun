<?php

namespace App\Http\Controllers\Admin;

use Inertia\Inertia;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function showLogin()
    {
        return Inertia::render('Admin/Auth/Login');
    }
}
