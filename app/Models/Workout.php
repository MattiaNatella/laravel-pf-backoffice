<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }

    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }
}
