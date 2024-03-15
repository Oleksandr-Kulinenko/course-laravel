<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animals extends Model
{
    public function feeds_animal(): HasMany
    {
        return $this->hasMany(FeedsAnimals::class);
    }

    public function get_animal(): BelongsTo
    {
        return $this->BelongsTo(Employees::class,'employee_id');
    }

    public function get_feed(): BelongsTo
    {
        return $this->BelongsTo(Feeds::class,'feed_id');
    }
}
