<?php

namespace App\Services;

use App\Contracts\CreateCharacterStrategy;
use App\Models\Character;

class CreateWarriorStrategy implements CreateCharacterStrategy
{
    public function create(): Character
    {
        $character = new Character();
        $character->name = 'Warrior';
        $character->health = 100;
        $character->endurance = 80;
        $character->weapon = 'Меч';
        $character->save();

        return $character;
    }
}
