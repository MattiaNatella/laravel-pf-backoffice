<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    protected $fillable = [
        'weight_kg',
        'workouts_completed',
        'photo_front',
        'photo_back',
        'photo_side_left',
        'photo_side_right'
    ];
    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }
}
