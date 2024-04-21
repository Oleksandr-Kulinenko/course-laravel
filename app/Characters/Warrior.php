<?php

namespace App\Characters;

use App\Contracts\Character;

class Warrior implements Character
{

    private $name;
    private $health;
    private $endurance;
    private $weapon;

    public function __construct($name, $health, $endurance, $weapon)
    {
        $this->name = $name;
        $this->health = $health;
        $this->endurance = $endurance;
        $this->weapon = $weapon;
    }

    public function attack(): string
    {
        return "{$this->name} attacks with {$this->weapon}!";
    }

    public function getInfoCharacter(): array
    {
        return [
            'name' => $this->name,
            'health' => $this->health,
            'endurance' => $this->endurance,
            'weapon' => $this->weapon
        ];
    }
}
