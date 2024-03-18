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

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
