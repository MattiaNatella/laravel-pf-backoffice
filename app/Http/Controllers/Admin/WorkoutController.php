<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Workout;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        //recupero l'id dell'atleta dalla query string inserita come parametro dell'URL
        $athleteId = $request->query('athlete_id');
        // dd($athleteId);

        //recupero i dati dell'atleta tramite id
        $athlete = Athlete::find($athleteId);
        // dd($athlete);



        return view('workouts.create', compact('athlete'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        //prendo tutti i campi dal form
        $data = $request->all();

        //aggiungo manualmente l'ID dell'atleta passato tramite query string

        $data['athlete_id'] = $request->athlete_id;

        //creo e salvo nuova istanza con il metodo create

        $newWorkout = Workout::create($data);

        return redirect()->route('admin.exercise_workouts.create')
            ->with('workout_id', $newWorkout->id)
            ->with('athlete_id', $data['athlete_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Workout $workout)
    {
        $athlete = $workout->athlete;

        $workout->load('exercises');
        return view('workouts.show', compact('workout', 'athlete'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Workout $workout)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Workout $workout)
    {
        $workout->delete();
        $athlete = $workout->athlete;

        return redirect()->route('admin.athletes.show', $athlete);
    }
}
