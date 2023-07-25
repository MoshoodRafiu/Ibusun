<?php

namespace App\Http\Controllers\Seller;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function showRegister()
    {
        return Inertia::render('Seller/Auth/Register');
    }

    public function register(RegisterRequest $request)
    {
        return $this->registerAccount($request);
    }
}
