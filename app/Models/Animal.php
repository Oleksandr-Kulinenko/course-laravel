<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function employees()
    {
        return $this->belongsToMany(Employee::class);
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
