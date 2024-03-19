<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalFood extends Model
{
    protected $table = 'animal_foods';

    public function food()
    {
        return $this->belongTo(Food::class);
    }

    public function animal()
    {
        return $this->belongTo(Animal::class);
    }
}
