@extends('layouts.app')

@section('content')

    <div class="container text-center my-3">
        <a class="btn btn-info my-2" href="{{ route('admin.athletes.create') }}">Aggiungi un nuovo Atleta</a>
    </div>

    <div class="container d-flex flex-wrap justify-content-center gap-3">
        @foreach ($athletes as $athlete)
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ ($athlete->image) ? asset('storage/' . $athlete->image) : "https://placehold.co/256x305/png" }}"
                            class="rounded-start w-100 copertina-atleta" alt="copertina-atleta">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$athlete->name}} {{ $athlete->surname }}</h5>
                            <p class="card-text"><small><strong>Altezza:</strong>
                                    {{ $athlete->height_cm }}cm<br><strong>Peso:</strong>
                                    {{ $athlete->initial_weight }}kg</small></p>
                            <div class="d-flex gap-1 flex-wrap">
                                <a class="btn btn-info text-white"
                                    href="{{ route('admin.athletes.show', $athlete) }}">Dettagli</a>
                                <a class="btn btn-warning text-white"
                                    href="{{ route('admin.athletes.edit', $athlete) }}">Modifica</a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal{{ $athlete->id }}">Elimina</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Modal -->
            <div class="modal fade" id="exampleModal{{ $athlete->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel{{ $athlete->id }}">Cancellazione record</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            L'eliminazione sarà <b>definitiva</b>, sei sicuro di voler procedere?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                            <form action="{{ route('admin.athletes.destroy', $athlete) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Elimina</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        @endforeach
    </div>
@endsection