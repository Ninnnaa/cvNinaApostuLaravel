<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalData extends Model
{
    use HasFactory;

    public function skills():BelongsTo {
        return $this->hasMany(Skill::class);
    }

    public function experiences():BelongsTo {
        return $this->hasMany(Experience::class);
    }
}
