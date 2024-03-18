<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalEmployee extends Model
{
    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
