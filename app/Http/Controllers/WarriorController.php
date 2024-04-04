<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class WarriorController extends Controller
{
    public function create(Request $request)
    {
        $character = new Character();
        $character->name = 'Warrior';
        $character->health = 100;
        $character->endurance = 80;
        $character->weapon = 'Меч';
        $character->save();

        return response()->json($character);
    }
}
