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
            //raccoglie anche i dati relativi alla tabella pivot, nello specifico le colonne sets, reps, notes, e le inserisce dentro exercises->pivot
            ->withPivot(['sets', 'reps', 'notes']);
    }
}
