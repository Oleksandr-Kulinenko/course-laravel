<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class ZooparkAnimals extends Controller
{
    public function showAllAnimals(Request $request)
    {
        $animals = Animal::all();

        return view('zoopark_animals', ['animals' => $animals]);
    }
}
