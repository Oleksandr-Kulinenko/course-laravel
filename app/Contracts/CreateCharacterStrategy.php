<?php

namespace App\Contracts;

use App\Models\Character;

interface CreateCharacterStrategy
{
    public function create(): Character;
}
