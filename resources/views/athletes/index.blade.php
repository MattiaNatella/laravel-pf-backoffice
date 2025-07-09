@extends('layouts.app')

@section('content')

    <span>Ciao Sono la INDEX DEGLI ATLETI</span>

    <div class="container d-flex flex-wrap gap-1">
        @foreach ($athletes as $athlete)
            <div class="card text-danger" style="width: 18rem;">
                <div class="card-header d-flex justify-content-between">
                    <span class="align-self-center">{{$athlete->name}} {{ $athlete->surname }}</span>
                    <button class="btn btn-info">Dettagli</button>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Email: {{ $athlete->email }}</li>
                    <li class="list-group-item">Telefono: {{ $athlete->telephone }}</li>
                    <li class="list-group-item">Note {{ $athlete->notes }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection