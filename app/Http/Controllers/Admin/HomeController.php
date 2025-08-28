<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TEmployee;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function TEmployee()
    {
        $employees = DB::table('TEmployee')->get();
        return view('Admin.pages.TEmployee', compact('employees'));
    }

    public function TRecords()
    {
        $records = DB::table('TRecords')->get();
        return view('Admin.pages.TRecords', compact('records'));
    }

}
