<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Employee;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testRequest(Request $request)
    {
        $animal = Animal::find(1);
        $food = $animal->foods()->where('employee_id', 2)->first();
        dd($food->toArray());
    }
}
