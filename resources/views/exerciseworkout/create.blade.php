@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Inserisci gli esercizi per il workout {{ $workout->name }} di {{ $athlete->name }} {{ $athlete->surname }} </h1>

        <div class="container">
            <ol>
                @forelse    ($workout->exercises as $exercise)
                    <li>{{ $exercise->name }} Serie: {{ $exercise->pivot->sets }} Ripetizioni: {{ $exercise->pivot->reps }}
                        Note: {{ $exercise->pivot->notes }} </li>


                @empty

                    <p>Inserire un esercizio</p>

                @endforelse
            </ol>
        </div>


        <form action="{{ route('admin.exercise_workouts.store', ['workout_id' => $workout->id]) }}" method="POST"
            class="form-control border border-2">
            @csrf

            <label for="exercise" class="form-label">Seleziona esercizio</label>

            <select name="exercise_id" class="form-select" aria-label="Default select example">
                <option selected>Seleziona l'esercizio</option>
                @foreach ($exercises as $exercise)
                    <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
                @endforeach
            </select>

            <label for="sets" class="form-label">Serie</label>
            <input type="number" name="sets" id="sets" class="form-control">

            <label for="reps" class="form-label">Ripetizioni</label>
            <input type="number" name="reps" id="reps" class="form-control">

            <label for="notes" class="form-label">Note</label>
            <input type="text" name="notes" id="notes" class="form-control">

            <input type="submit" value="Invia" class="my-2 btn btn-warning">

        </form>

    </div>

@endsection