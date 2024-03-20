<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    public function employees()
    {
        return $this->hasMany(Employee::class, 'animal_employees');
    }

    public function foods()
    {
        return $this->hasMany(Food::class, 'animal_foods');
    }
}
