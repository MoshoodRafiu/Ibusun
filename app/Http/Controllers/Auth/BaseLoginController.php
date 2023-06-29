<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

abstract class BaseLoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     */
    public function authenticate(LoginRequest $request, string $guard = 'web'): RedirectResponse
    {
        $credentials = $request->only(['email', 'password']);

        if (Auth::guard($guard)->attempt($credentials)) {
            $request->session()->regenerate();

            $fallbackRedirectPath = $guard === 'web' ? 'home' : "{$guard}/home";
            return redirect()->intended($fallbackRedirectPath);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
