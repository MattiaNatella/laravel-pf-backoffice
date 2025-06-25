<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Check extends Model
{
    public function athlete()
    {
        return $this->belongsTo(Athlete::class);
    }
}
