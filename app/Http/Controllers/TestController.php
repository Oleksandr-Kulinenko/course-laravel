<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Employee;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testRequest(Request $request)
    {
        $employee = Employee::find(2);
        dd($employee->animal_eat->toArray());
    }
}
