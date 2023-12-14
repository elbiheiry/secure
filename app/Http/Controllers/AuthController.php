<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:members')->except('logout');
    }
/**
 * Show the application's login form.
 *
 * @return \Illuminate\View\View
 */
    public function showLoginForm()
    {
        return view('site.auth.login');
    }
    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string|min:8',
        ], [

        ], [
            $this->username() => locale() == 'en' ? 'Email' : 'البريد الإلكتروني',
            'password' => locale() == 'en' ? 'Password' : 'الرقم السري'
        ]);
    }

    public function logout()
    {
        $this->guard()->logout();

        return redirect('/login');
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('members');
    }
}
