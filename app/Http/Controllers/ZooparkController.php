<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class ZooparkController extends Controller
{
    public function index()
    {
        $foods = Food::with('animals')->get();
        return view(
            'food_animal',
            [
                'foods' => $foods
            ]
        );
    }
}
