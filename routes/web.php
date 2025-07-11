<?php

use App\Http\Controllers\Admin\AthleteController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\ExerciseWorkoutController;
use App\Http\Controllers\Admin\WorkoutController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// ROTTE ADMIN
Route::middleware(['auth'])
    ->name('admin.')
    ->prefix('/admin')
    ->group(function () {
        Route::resource('workouts', WorkoutController::class);
        Route::resource('exercises', ExerciseController::class);
        Route::resource('athletes', AthleteController::class);
        Route::resource('exercise_workouts', ExerciseWorkoutController::class);
    });

require __DIR__ . '/auth.php';
