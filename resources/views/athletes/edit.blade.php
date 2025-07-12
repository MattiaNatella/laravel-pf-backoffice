@extends('layouts.app')

@section('content')

    <div class="container">
        <h1>Aggiungi un nuovo Atleta</h1>

        <form action="{{ route('admin.athletes.update', $athlete) }}" method="POST" class="form-control border border-2"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for=" name" class="form-label">Nome</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $athlete->name }}">

            <label for="surname" class="form-label">Cognome</label>
            <input type="text" name="surname" id="surname" class="form-control" value="{{ $athlete->surname }}">

            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $athlete->email }}">

            <label for="telephone" class="form-label">Telefono/Cellulare</label>
            <input type="tel" name="telephone" id="telephone" class="form-control" value="{{ $athlete->telephone }}">

            <label for="notes" class="form-label">Note</label>
            <input type="text" name="notes" id="notes" class="form-control" value="{{ $athlete->notes }}">

            <label for="height_cm" class="form-label">Altezza in CM</label>
            <input type="number" name="height_cm" id="height_cm" class="form-control" value="{{ $athlete->height_cm }}">

            <label for="initial_weight" class="form-label">Peso in KG</label>
            <input type="number" name="initial_weight" id="initial_weight" class="form-control"
                value="{{ $athlete->initial_weight }}">

            <label for="image" class="form-label">Foto Atleta</label>
            <div class="d-flex">
                <input type="file" name="image" id="image" class="form-control" value="{{ $athlete->image }}">

                @if ($athlete->image)
                    <div class="col-md-4 p-0" style="max-width: 540px;">
                        <img src="{{ asset('storage/' . $athlete->image) }}" class="img-fluid rounded w-50 my-1" alt="...">
                    </div>
                @endif
            </div>


            <input type="submit" value="Invia" class="my-2 btn btn-warning">

        </form>

    </div>

@endsection