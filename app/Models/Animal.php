<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    public function foods()
    {
        return $this->belongsToMany(Food::class,'animal_foods');
    }
    public function employees()
    {
        return $this->belongsToMany(Employee::class, 'animal_employees');
    }

    public function animal_foods()
    {
        return $this->belongsToMany(AnimalFood::class);
    }


}
