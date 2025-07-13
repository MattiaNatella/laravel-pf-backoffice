<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    public function index()
    {

        //con una sola query ho accesso interamente ad atleti, workouts e relativi esercizi
        $athletes = Athlete::with(['workouts.exercises'])->get();

        return response()->json([
            'success' => true,
            'message' => 'Dati recuperati con successo',
            'data' => $athletes
        ]);
    }
}
