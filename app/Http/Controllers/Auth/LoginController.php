<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginAuthenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Handle an authentication attempt.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function authenticate(LoginAuthenticate $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('profile');
        }
        return redirect(route('web.logon'))->withErrors(['Bad credentials. Please login again.']);
    }

    /**
     * Logout user
     */
    public function logout(): void
    {
        Auth::logout();
    }
}
