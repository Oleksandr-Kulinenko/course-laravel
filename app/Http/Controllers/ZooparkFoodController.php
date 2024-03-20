<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class ZooparkFoodController extends Controller
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
