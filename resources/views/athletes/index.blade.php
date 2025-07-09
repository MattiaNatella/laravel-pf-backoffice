@extends('layouts.app')

@section('content')


    <div class="container">
        <a class="btn btn-info my-2" href="{{ route('admin.athletes.create') }}">Aggiungi un nuovo Atleta</a>
    </div>

    <div class="container d-flex flex-wrap gap-1">


        @foreach ($athletes as $athlete)
            <div class="card text-danger" style="width: 18rem;">
                <div class="card-header d-flex justify-content-between">
                    <span class="align-self-center">{{$athlete->name}} {{ $athlete->surname }}</span>
                    <a class="btn btn-info" href="{{ route('admin.athletes.show', $athlete) }}">Dettagli</a>
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