<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class ZooparkEmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::with('animals')->get();
        return view(
            'employee_animal',
            [
                'employees' => $employees
            ]
        );
    }
}
