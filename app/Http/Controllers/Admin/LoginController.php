<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\BaseLoginController;
use App\Http\Requests\LoginRequest;
use Inertia\Inertia;

class LoginController extends BaseLoginController
{
    public function showLogin()
    {
        return Inertia::render('Admin/Auth/Login');
    }

    public function login(LoginRequest $request)
    {
        return $this->authenticate($request, 'admin');
    }
}
