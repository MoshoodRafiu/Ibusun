<?php

namespace App\Http\Controllers\User;

use Inertia\Inertia;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Auth\BaseLoginController;

class LoginController extends BaseLoginController
{
    public function showLogin()
    {
        return Inertia::render('User/Auth/Login');
    }

    public function login(LoginRequest $request)
    {
        return $this->authenticate($request);
    }
}
