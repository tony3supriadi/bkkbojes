<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class AuthController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = "/app/v1/bkk-admin";

    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }

    public function username()
    {
        $username = request()->input('username');
        return filter_var($username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();
        return redirect()->route('admin.auth.login');
    }
}
