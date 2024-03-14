<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employees extends Model
{
    public function animals_employee(): HasMany
    {
        return $this->hasMany(EmployeesAnimals::class);
    }
}
