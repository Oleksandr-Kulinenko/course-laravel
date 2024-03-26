<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class ZooparkController extends Controller
{
    public function showAllAnimals(Request $request)
    {
        $animals = Animal::all();

        return view('animals', ['animals' => $animals]);
    }

    public function showAnimalInfo(Request $request, Animal $animal)
    {
        //dd($animal->toArray());
        $animalFoodData = $animal->foods;
        $animalEmployeeData = $animal->employees;
        return view(
            'animal_info',
            [
                'animal'     => $animal,
                'animalFoodData' => $animalFoodData,
                'animalEmployeeData' => $animalEmployeeData
            ]
        );
    }
}
