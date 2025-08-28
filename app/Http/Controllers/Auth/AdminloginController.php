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

        // check Employee table when enter personal ID and password
        $employee = DB::table('TEmployee')
            ->where('EmployeeID', $request->adminname)
            ->where('Password', $request->password)
            ->first();

        if ($employee) {
            
            session([
                'EmployeeID' => $employee->EmployeeID,
                'Office' => $employee->Office,
                'Dept_Code' => $employee->Dept_Code,
            ]);

            return redirect()->route('frontend.userRate');
        }

        // if nothing matched → back to login page
        return redirect()->route('login');
    }
}
