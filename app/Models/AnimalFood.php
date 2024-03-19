<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalFood extends Model
{
    protected $table = 'animal_foods';

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function food()
    {
        return $this->belongsTo(Food::class);
    }
}
