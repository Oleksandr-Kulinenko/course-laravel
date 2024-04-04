<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class ZooparkFoods extends Controller
{
    public function showAllFoods(Request $request)
    {
        $foods = Food::all();

        return view('zoopark_foods', ['foods' => $foods]);
    }
}
