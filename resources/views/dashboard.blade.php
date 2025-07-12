@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-white pt-5">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col">
                <div class="card text-white">
                    <div class="card-header bg-danger">{{ __('User Dashboard') }}</div>

                    <div class="card-body " style="background-color: #202020;">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection