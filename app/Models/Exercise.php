<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [
        'name',
        'primary_muscle_group',
        'secondary_muscle_group',
        'tertiary_muscle_group'
    ];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class);
    }
}
