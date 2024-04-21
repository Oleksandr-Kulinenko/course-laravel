<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class ArcherController extends Controller
{
    public function create(Request $request)
    {
        $character = new Character();
        $character->name = 'Archer';
        $character->health = 85;
        $character->endurance = 90;
        $character->weapon = 'Арбалет';
        $character->save();

        return response()->json($character);
    }
}
