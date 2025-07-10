@extends('layouts.app')

@section('content')

    <div class="container text-center my-3">
        <a class="btn btn-info my-2" href="{{ route('admin.athletes.create') }}">Aggiungi un nuovo Atleta</a>
    </div>

    <div class="container d-flex flex-wrap gap-2 justify-content-center my-3">

        @foreach ($athletes as $athlete)

            <div class="card text-danger" style="width: 28rem;">
                <div class="card-header d-flex justify-content-between">
                    <span class="align-self-center">{{$athlete->name}} {{ $athlete->surname }}</span>
                    <div class="crud d-flex gap-2">
                        <a class="btn btn-info" href="{{ route('admin.athletes.show', $athlete) }}">Dettagli</a>
                        <a class="btn btn-warning" href="{{ route('admin.athletes.edit', $athlete) }}">Modifica</a>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Elimina
                        </button>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Email:</strong> {{ $athlete->email }}</li>
                    <li class="list-group-item"><strong>Telefono:</strong> {{ $athlete->telephone }}</li>
                    <li class="list-group-item"><strong>Note:</strong> {{ $athlete->notes }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection


<!-- Bootstrap Modal -->


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
                <form action="{{ route('admin.athletes.destroy', $athletes) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Elimina</button>

                </form>
            </div>
        </div>
    </div>
</div>