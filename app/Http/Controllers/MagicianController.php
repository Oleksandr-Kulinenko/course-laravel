<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class MagicianController extends Controller
{
    public function create(Request $request)
    {
        $character = new Character();
        $character->name = 'Magician';
        $character->health = 90;
        $character->endurance = 65;
        $character->weapon = 'Магічний посох';
        $character->save();

        return response()->json($character);
    }
}
