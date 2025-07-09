<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Athlete;
use Illuminate\Http\Request;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //mostra tutti gli atleti

        $athletes = Athlete::all();

        // DA FARE: CREARE IL DEFAULT LAYOUT, POI LE CRUD E LE VIEW PER OGNI ENTITA' PER ATLETI, WORKOUTS,EXERCISE, EXERCISE_WORKOUTS

        return view('athletes.index', compact('athletes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('athletes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestArray = $request->toArray();
        $newAthlete = Athlete::create($requestArray);

        return redirect()->route('admin.athletes.show', $newAthlete);
    }

    /**
     * Display the specified resource.
     */
    public function show(Athlete $athlete)
    {
        return view('athletes.show', compact('athlete'));
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
