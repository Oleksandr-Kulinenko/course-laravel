<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Employee;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testRequest(Request $request)
    {
        $animal = Animal::with('animal_foods','animal_employees.employee')->find(1);
        dd($animal->toArray());
        //$food = $animal->foods()->where('employee_id', 1)->first();
        //$food = $animal->with('foods','employees')->get();
        //dd($food->toArray());
    }
}
