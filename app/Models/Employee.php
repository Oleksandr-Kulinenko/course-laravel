<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employees';

    public function animal(){
        return $this->hasMany(EmployeeAnimal::class);
    }

    public function animal_eat(){
        return $this->hasMany(FeedAnimal::class,'animal_id');
    }
}
