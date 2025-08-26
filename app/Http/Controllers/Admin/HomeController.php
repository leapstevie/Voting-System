<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
        // $admin = Auth::guard('admin')->user();
        // echo 'Welcome, ' . $admin->name . ' <a href="' . route('admin.logout') . '">Logout</a>';
    }
}
