<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function checks()
    {
        return $this->hasMany(Check::class);
    }
}
