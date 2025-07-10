@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Dettaglio atleta {{$athlete->name }} {{ $athlete->surname }} </h1>
        <h2>Schede di allenamento:</h2>
        <ul>

            <!-- Itero tutti i workout dell'atleta -->
            @foreach ($athlete->workouts as $workout)
                <li><strong>Nome Protocollo:</strong> {{ $workout->name }} <strong>Obiettivo:</strong> {{ $workout->goal }}
                    <strong>Data Inizio:</strong>
                    {{ $workout->created_at }}
                </li>
                <!-- Per ogni workout itero tutti gli esercizi ad esso collegati -->
                <ul>
                    @foreach ($workout->exercises as $exercise)
                        <li><strong>{{ $exercise->name }}</strong> / <strong>Sets:</strong> {{ $exercise->pivot->sets }}
                            <strong>Reps:</strong> {{ $exercise->pivot->reps }} /
                            {{ $exercise->pivot->notes }}
                        </li>

                    @endforeach

                </ul>

            @endforeach

        </ul>


        -- inserire card --

    </div>


@endsection