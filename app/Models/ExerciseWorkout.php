<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExerciseWorkout extends Model
{
    protected $fillable = [
        'exercise_id',
        'workout_id',
        'sets',
        'reps',
        'notes',
    ];
}
