<?php

namespace App\Service;

use Illuminate\Support\Facades\Auth;

class LoginService
{

  public function processLogin(array $credentials, string $guard)
  {
    return Auth::guard($guard)->attempt($credentials);
  }
}
