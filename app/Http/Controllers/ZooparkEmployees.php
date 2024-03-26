<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class ZooparkEmployees extends Controller
{
    public function showAllEmployees(Request $request)
    {
        $employees = Employee::all();

        return view('zoopark_employees', ['employees' => $employees]);
    }
}
