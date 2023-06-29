<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Service\LoginService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

abstract class BaseLoginController extends Controller
{
    public function __construct(protected LoginService $loginService)
    {

    }

    /**
     * Handle an authentication attempt.
     */
    public function authenticate(LoginRequest $request, string $guard = 'web'): RedirectResponse
    {
        if ($this->loginService->processLogin($request->only(['email', 'password']), $guard)) {
            $request->session()->regenerate();

            $fallbackRedirectPath = $guard === 'web' ? 'home' : "{$guard}/home";
            return redirect()->intended($fallbackRedirectPath);
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
