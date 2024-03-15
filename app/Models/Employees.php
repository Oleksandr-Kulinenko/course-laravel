<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employees extends Model
{
    public function animals_employee(): HasMany
    {
        return $this->hasMany(EmployeesAnimals::class);
    }

    public function get_animal(): BelongsTo
    {
        return $this->BelongsTo(Animals::class,'animal_id');
    }
}
