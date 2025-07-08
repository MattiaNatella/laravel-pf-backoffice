<?php

namespace Database\Seeders;

use App\Models\Exercise;
use App\Models\ExerciseWorkout;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class ExerciseWorkoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //prendo solo l'ID di ogni workout, uso toArray per avere i dati in un array invece di una Collection
        $workouts = Workout::pluck('id')->toArray();

        //prendo solo gli ID di ogni esercizio, qui non uso toArray() perchp il random a riga 39 funziona solo sulle collection
        $exercises = Exercise::pluck('id');


        foreach ($workouts as $workout) {

            //creo una variabile che definirà per ogni workout il numero di esercizi da assegnare
            $max = random_int(4, 10);
            $i = 0;

            while ($i < $max) {

                // Creo una nuova istanza
                $newExerciseWorkout = new ExerciseWorkout([
                    'workout_id' => $workout,
                    //prendo un valore random
                    'exercise_id' => $exercises->random(),
                    'sets' => $faker->numberBetween(3, 5),
                    'reps' => $faker->numberBetween(8, 15),
                    'notes' => $faker->sentence(),
                ]);

                $newExerciseWorkout->save();
                $i++;
            }


        }

    }
}
