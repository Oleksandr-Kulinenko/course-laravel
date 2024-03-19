<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'animal_employees');
    }

    public function animal_employees()
    {
        return $this->belongsToMany(AnimalEmployee::class);
    }
}
