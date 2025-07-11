@extends('layouts.app')

@php
    if (empty($workout)) {
        $workout = 0;
    }
@endphp

@section('content')
    <div class="container my-2 border-black rounded py-3">
        <h1 class=" border-primary rounded">Dettaglio atleta <span
                class="text-info text-decoration-underline">{{$athlete->name }}
                {{ $athlete->surname }}</span> </h1>
        @if ($workout != 0)
            <h2>Schede di allenamento:</h2>
        @endif

        <ol class="p-0">
            <!-- Itero tutti i workout dell'atleta -->
            @forelse ($athlete->workouts as $workout)
                <div class="container border border-2 border-success rounded p-3 ">
                    <li><strong>Nome Protocollo:</strong> {{ $workout->name }} <strong>Obiettivo:</strong> {{ $workout->goal }}
                        <strong>Data Inizio:</strong>
                        {{ $workout->created_at }}
                    </li>
                    <div class="crud d-flex gap-2">
                        <a class="btn btn-info text-white"
                            href="{{ route('admin.workouts.show', $workout) }}">VisualizzaScheda</a>
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Elimina Scheda
                        </button> -->
                    </div>
                </div>
            @empty
                <h2>Non è stato ancora assegnato un workout!</h2>

            @endforelse
        </ol>
    </div>
@endsection

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Cancellazione record</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                L'eliminazione sarà <b>definitiva</b>, sei sicuro di voler procedere?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                <form action="{{ route('admin.workouts.destroy', $workout) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>
                </form>
            </div>
        </div>
    </div>
</div>