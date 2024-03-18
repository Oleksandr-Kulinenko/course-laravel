<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function animal_employees()
    {
        return $this->hasMany(AnimalEmployee::class);
    }

    public function animal_foods()
    {
        return $this->hasMany(AnimalFood::class);
    }

}
