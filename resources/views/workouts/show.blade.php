@extends('layouts.app')

@section('content')
    {{-- @dd($workout->exercise) --}}
    <div class="container my-3 border border-2 rounded">Scheda allenamento <strong>{{ $workout->name }}</strong> di
        <strong>{{ $athlete->name }}
            {{ $athlete->surname }}</strong>

        <h2><strong></strong>ESERCIZI</h2>
        <ol>
            @foreach ($workout->exercises as $exercise)

                {{-- @dd($exercise)--}}
                <li>{{ $exercise->name }} - <b>SETS</b> {{ $exercise->pivot->sets }} / <b>REPS</b> {{ $exercise->pivot->reps }}
                    - <b>NOTE</b>
                    {{ $exercise->pivot->notes }}</li>

            @endforeach

        </ol>

    </div>

@endsection