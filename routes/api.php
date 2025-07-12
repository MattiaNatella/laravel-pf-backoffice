<?php

use App\Http\Controllers\Api\AthleteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::get('athletes', [AthleteController::class, 'index'])
    ->name('home');