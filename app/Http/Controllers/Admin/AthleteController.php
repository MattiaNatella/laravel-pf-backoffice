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
        //raccoglie tutti gli atleti
        $athletes = Athlete::all();

        $athletes = $athletes->sortBy('name');

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

        $newAthlete = Athlete::create($request->all());

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
    public function edit(Athlete $athlete)
    {
        return view('athletes.edit', compact('athlete'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Athlete $athlete)
    {
        $athlete->update($request->all());

        return redirect()->route('admin.athletes.show', $athlete);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Athlete $athlete)
    {
        $athlete->delete();
        return redirect()->route('admin.athletes.index');
    }
}
