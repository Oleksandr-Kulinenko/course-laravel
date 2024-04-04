<?php

namespace App\Services;

use App\Contracts\CreateCharacterStrategy;
use App\Models\Character;

class CharacterCreationService
{
    protected $strategy;

    public function __construct(CreateCharacterStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function createHero(): Character
    {
        return $this->strategy->create();
    }
}

$service = new CharacterCreationService(new CreateWarriorStrategy());
$warrior = $service->createHero();
dd($warrior);
