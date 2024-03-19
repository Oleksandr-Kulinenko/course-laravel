<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';

    public function animals()
    {
        return $this->belongsToMany(Animal::class, 'animal_foods');
    }

    public function animal_foods()
    {
        return $this->belongsToMany(AnimalFood::class);
    }
}
