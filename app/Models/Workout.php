<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [
        'athlete_id',
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
            //qui sto dicendo di caricare anche i dati della tabella pivot
            ->withPivot(['sets', 'reps', 'notes']);
    }
}
