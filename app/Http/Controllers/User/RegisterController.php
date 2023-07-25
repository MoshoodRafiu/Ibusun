<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Auth\BaseRegisterController;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends BaseRegisterController
{
    public function showRegister()
    {
        return Inertia::render('User/Auth/Register');
    }

    public function register(RegisterRequest $request)
    {
        return $this->registerAccount($request);
    }
}
