<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [
        'name',
        'goal',
        'notes',
        'workouts_per_weeks'
    ];
    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class)
            ->withPivot('sets', 'reps');
    }
}
