<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        if ($request->adminname === 'admin' && $request->password === '123') {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('frontend.userRate');
    }
}
