<?php

use App\Http\Controllers\Admin\AthleteController;
use App\Http\Controllers\Admin\ExerciseController;
use App\Http\Controllers\Admin\ExerciseWorkoutController;
use App\Http\Controllers\Admin\WorkoutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\Attributes\Group;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// ROTTE ADMIN

Route::middleware(['auth', 'verified'])
    ->name('admin.')
    ->prefix('/admin')
    ->group(function () {
        Route::resource('workouts', WorkoutController::class);
        Route::resource('exercises', ExerciseController::class);
        Route::resource('athletes', AthleteController::class);
        Route::resource('exercise_workouts', ExerciseWorkoutController::class);
    });

require __DIR__ . '/auth.php';
