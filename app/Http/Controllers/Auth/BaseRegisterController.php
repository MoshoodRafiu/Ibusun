<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Services\RegisterService;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\RegisterRequest;

abstract class BaseRegisterController extends Controller
{
    public function __construct(protected RegisterService $registerService)
    {
    }

    /**
     * Handle an authentication attempt.
     */
    public function registerAccount(RegisterRequest $request, string $guard = 'web'): RedirectResponse
    {
        if ($this->registerService->processRegister($request->all(), $guard)) {
            return redirect()->to($guard === 'web' ? 'login' : "{$guard}/login");
        }
        return back();
    }
}
