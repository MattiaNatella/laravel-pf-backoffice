@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Crea un nuovo workout per {{ $athlete->name }} {{ $athlete->surname }} </h1>

        <form action="{{ route('admin.workouts.store', ['athlete_id' => $athlete->id]) }}" method="POST"
            class="form-control border border-2">
            @csrf

            <label for="name" class="form-label">Nome Scheda allenamento</label>
            <input type="text" name="name" id="name" class="form-control">

            <label for="goal" class="form-label">Obiettivo</label>
            <input type="text" name="goal" id="goal" class="form-control">

            <label for="notes" class="form-label">Note</label>
            <input type="text" name="notes" id="notes" class="form-control">

            <label for="workouts_per_weeks" class="form-label">Allenamenti a settimana</label>
            <input type="number" name="workouts_per_weeks" id="workouts_per_weeks" class="form-control">


            <input type="submit" value="Invia" class="my-2 btn btn-warning">

        </form>

    </div>

@endsection