<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use App\Models\Exercise;
use App\Models\ExerciseWorkout;
use App\Models\Workout;
use Illuminate\Http\Request;

class ExerciseWorkoutController extends Controller
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
    public function create()
    {
        $athlete = Athlete::find(session('athlete_id'));
        $workout = Workout::find(session('workout_id'));
        $exercises = Exercise::all();

        //dd($athlete, $workout, $exercises);

        return view('exerciseworkout.create', compact('athlete', 'workout', 'exercises'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $workout = Workout::find($request->workout_id);
        // dd($request);
        $data = $request->all();

        $data['workout_id'] = $request->workout_id;
        $athlete = $workout->athlete;
        // dd($data);

        $newExercise = ExerciseWorkout::create($data);

        return redirect()->route('admin.exercise_workouts.create')
            ->with('workout_id', $data['workout_id'])
            ->with('athlete_id', $athlete->id);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
