<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{
    protected $fillable = [
        'name',
        'surname',
        'email',
        'telephone',
        'notes',
        'height_cm',
        'initial_weight',
        'image'
    ];
    public function workouts()
    {
        return $this->hasMany(Workout::class);
    }

    public function checks()
    {
        return $this->hasMany(Check::class);
    }
}
