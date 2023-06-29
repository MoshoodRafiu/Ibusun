<?php

namespace App\Http\Controllers\Seller;

use Inertia\Inertia;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Auth\BaseLoginController;

class LoginController extends BaseLoginController
{
    public function showLogin()
    {
        return Inertia::render('Seller/Auth/Login');
    }

    public function login(LoginRequest $request)
    {
        $this->authenticate($request, 'seller');
    }
}
