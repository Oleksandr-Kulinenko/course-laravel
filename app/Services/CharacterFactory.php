<?php

namespace App\Services;

use App\Characters\Warrior;
use App\Characters\Archer;

class CharacterFactory
{
    public static function createCharacter($type)
    {
        switch ($type) {
            case 'warrior':
                return new Warrior('Blade',80,90,'меч');
            case 'archer':
                return new Archer('Logolaz',60,85,'лук');
        default:
            return "Invalid character type.";
        }
    }
}

$warrior = CharacterFactory::createCharacter('archer');
dd($warrior->getInfoCharacter());

