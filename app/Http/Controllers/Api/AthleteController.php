<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {

        //con una sola riga ho accesso internamente ad atleti, workouts e relativi esercizi, tramite with viene effettuato l'"eager loading"
        $athletes = Athlete::with(['workouts.exercises'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Dati recuperati con successo',
            'data' => $athletes
        ]);
    }
}
