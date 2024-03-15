<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Feeds extends Model
{
    public function get_animal(): BelongsTo
    {
        return $this->BelongsTo(Animals::class,'animal_id');
    }
}
