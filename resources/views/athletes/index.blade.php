@extends('layouts.app')

@section('content')

    <div class="container">
        <a class="btn btn-info my-2" href="{{ route('admin.athletes.create') }}">Aggiungi un nuovo Atleta</a>
    </div>

    <div class="container d-flex flex-wrap gap-3">

        @foreach ($athletes as $athlete)

            <div class="card text-danger" style="width: 22rem;">
                <div class="card-header d-flex justify-content-between">
                    <span class="align-self-center">{{$athlete->name}} {{ $athlete->surname }}</span>
                    <div class="crud d-flex">
                        <a class="btn btn-info" href="{{ route('admin.athletes.show', $athlete) }}">Dettagli</a>
                        <a class="btn btn-warning" href="{{ route('admin.athletes.edit', $athlete) }}">Modifica</a>
                    </div>
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