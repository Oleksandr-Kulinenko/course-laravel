<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animals extends Model
{
    public function feeds_animal(): HasMany
    {
        return $this->hasMany(FeedsAnimals::class);
    }
}
