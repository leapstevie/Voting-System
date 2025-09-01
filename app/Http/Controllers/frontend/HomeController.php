<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.userRate');
    }

    public function listHighLevelUsers()
    {
        $Dept_Code = session('Dept_Code');
        $Office = session('Office');
        $employees = DB::table('TEmployee')
            ->where('D_Level', '>=', 6)
            ->where('Dept_Code', $Dept_Code)
            ->where('Office', $Office)
            ->inRandomOrder()
            ->take(10)
            ->get();

        return view('frontend.userRate', compact('employees'));
    }

    public function store(Request $request)
    {
        $employeeId = $request->employee_id;
        $department = $request->department;
        $office     = $request->office;
        $year       = date('Y');
        $voteDate = date('Y-m-d H:i:s');

        // insert first to get EmployeeID
        $employee = DB::table('TEmployee')
            ->where('EmployeeID', $employeeId)
            ->first();

        $insertData = [];

        foreach ($request->votes as $vote) {
            $voteCode = '*' . $employeeId . '1' . date('His') . '*';
            $insertData[] = [
                'Vote_ID'         => 1,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $employee->PPWSA_Code,
                'EmployeeName_KH' => $employee->EmployeeName_KH,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 1,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['samattapheap'],
                'Year'            => $year,
                'Vote_Time'       => 1,
                'Time'            => 1,
                'Status'          => 'VOTE',
                'Vote_Date'       => $voteDate,
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];

            $insertData[] = [
                'Vote_ID'         => 2,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $employee->PPWSA_Code,
                'EmployeeName_KH' => $employee->EmployeeName_KH,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 2,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['kountor'],
                'Year'            => $year,
                'Vote_Time'       => 1,
                'Time'            => 1,
                'Status'          => 'VOTE',
                'Vote_Date'       => $voteDate,
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];

            $insertData[] = [
                'Vote_ID'         => 3,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $employee->PPWSA_Code,
                'EmployeeName_KH' => $employee->EmployeeName_KH,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 3,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['sakammapeap'],
                'Year'            => $year,
                'Vote_Time'       => 1,
                'Time'            => 1,
                'Status'          => 'VOTE',
                'Vote_Date'       => $voteDate,
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];
        }

        DB::table('TRecords')->insert($insertData);

        return back()->with('success', 'All votes submitted!');
    }
}
