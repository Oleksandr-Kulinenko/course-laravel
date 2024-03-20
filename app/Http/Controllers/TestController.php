<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function testRequest(Request $request)
    {
        $animal = Animal::all();
        dd($animal->toArray());
        //$food = $animal->foods()->where('employee_id', 1)->first();
        //$food = $animal->with('foods','employees')->get();
        //dd($food->toArray());
    }
}
