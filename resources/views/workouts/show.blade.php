@extends('layouts.app')

@section('content')
    {{-- @dd($workout->exercise) --}}
    <div class="cs-container my-3 border border-2 rounded">
        <h2>Scheda allenamento <strong>{{ $workout->name }}</strong> di
            <strong>{{ $athlete->name }}
                {{ $athlete->surname }}</strong>
        </h2>

        <h3 class="text-center"><strong></strong>ESERCIZI</h3>
        <ol>
            @foreach ($workout->exercises as $exercise)

                {{-- @dd($exercise)--}}
                <li><strong>{{ $exercise->name }}</strong> - <b>sets</b> {{ $exercise->pivot->sets }} / <b>reps</b>
                    {{ $exercise->pivot->reps }}
                    - <b>NOTE</b>
                    {{ $exercise->pivot->notes }}</li>

            @endforeach

        </ol>

    </div>

@endsection