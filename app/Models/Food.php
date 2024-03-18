<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }

    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }
}
