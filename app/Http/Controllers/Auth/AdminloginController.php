<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // for query builder

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

        //EmployeeID /Password matches the adminname from the form
        $employee = DB::table('TEmployee')
            ->where('EmployeeID', $request->adminname)
            ->where('Password', $request->password)
            ->first();

        if ($employee) {

            // Store necessary info in session testing in login to the table TEmployee
            session([
                'EmployeeID' => $employee->EmployeeID,
                'Office' => $employee->Office,
                'Dept_Code' => $employee->Dept_Code,
            ]);

            return redirect()->route('frontend.userRate');
        }

       
        return redirect()->route('login');
    }
}
