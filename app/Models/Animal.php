<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'animals';

    public function feed(){
        return $this->hasMany(FeedAnimal::class);
    }

    public function employee(){
        return $this->hasMany(EmployeeAnimal::class);
    }
}
