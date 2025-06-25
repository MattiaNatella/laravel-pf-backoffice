<?php

namespace Database\Seeders;

use App\Models\Athlete;
use App\Models\Workout;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class WorkoutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $athletes = Athlete::all()->pluck('id')->toArray();
        $goals = ['massa', 'forza', 'dimagrimento'];


        foreach ($athletes as $athlete) {
            Workout::create([
                'athlete_id' => $athlete,
                'name' => $faker->words(3, true),
                'goal' => $faker->randomElement($goals),
                'notes' => $faker->sentence(),
                'workouts_per_weeks' => $faker->numberBetween(2, 7)
            ]);
        }

    }
}
