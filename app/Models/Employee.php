<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    public function animal_foods()
    {
        return $this->belongsToMany(AnimalFood::class);
    }

    public function animal_employees()
    {
        return $this->hasMany(AnimalEmployee::class);
    }
}
