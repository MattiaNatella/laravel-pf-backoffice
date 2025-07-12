@extends('layouts.app')
@section('content')
    <div class="container hero-card p-0 glass-effect d-flex justify-content-center align-items-center">
        <div class="text-white text-center">
            <h1><strong>Benvenuto nel Back Office della tua web-app da Personal Trainer! </strong></h1>
            <p class="fs-2">Qui potrai gestire tutte le informazioni riguardanti i tuoi atleti, consultare le loro schede di
                allenamento
                ed assegnarne di nuove!</p>
            @guest
                <p class="fs-3">Per cominciare, effettua il login</p>
            @else
                <p class="fs-3">Ora clicca in alto su "Atleti"!</p>
            @endguest
        </div>
@endsection