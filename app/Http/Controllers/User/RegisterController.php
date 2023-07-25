<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return Inertia::render('User/Auth/Register');
    }

    public function register(RegisterRequest $request)
    {

    }
}
