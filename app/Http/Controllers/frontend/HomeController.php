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
        $employeeId   = $request->employee_id;
        $ppwsaCode    = $request->ppwsa_code;
        $employeeName = $request->employee_name_kh;
        $department   = $request->department;
        $office       = $request->office;
        $year         = date('Y');
        $time         = date('H:i:s');

        $insertData = [];

        $maxVoteId = DB::table('TRecords')->max('Vote_ID') ?? 0;

        foreach ($request->votes as $vote) {
            $maxVoteId++;
            $voteCode = '*' . $employeeId . '1' . date('His') . '*';

            $insertData[] = [
                'Vote_ID'         => $maxVoteId,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $ppwsaCode,
                'EmployeeName_KH' => $employeeName,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 1,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['samattapheap'],
                'Year'            => $year,
                'Vote_Time'       => $time,
                 'Time'            => $time,  
                'Status'          => 'VOTE',
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];

            $maxVoteId++;
            $insertData[] = [
                'Vote_ID'         => $maxVoteId,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $ppwsaCode,
                'EmployeeName_KH' => $employeeName,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 2,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['kountor'],
                'Year'            => $year,
                'Vote_Time'       => $time,
                 'Time'            => $time,  
                'Status'          => 'VOTE',
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];

            $maxVoteId++;
            $insertData[] = [
                'Vote_ID'         => $maxVoteId,
                'EmployeeID'      => $employeeId,
                'EmployeeCode'    => $ppwsaCode,
                'EmployeeName_KH' => $employeeName,
                'Department'      => $department,
                'Office'          => $office,
                'Vote_Type'       => 3,
                'Candidate'       => $vote['candidate_name'],
                'Vote_Option'     => $vote['sakammapeap'],
                'Year'            => $year,
                'Vote_Time'       => $time,
                 'Time'            => $time,  
                'Status'          => 'VOTE',
                'Vote_Code'       => $voteCode,
                'Can_ID'          => $vote['candidate_id'],
            ];
        }

        DB::table('TRecords')->insert($insertData);

        return back()->with('success', 'All votes submitted!');
    }
}
