<?php

namespace Database\Seeders;

use App\Models\Athlete;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class AthleteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 15; $i++) {

            $newAthlete = new Athlete();

            $newAthlete->name = $faker->firstName();
            $newAthlete->surname = $faker->lastName();
            $newAthlete->email = $faker->email();
            $newAthlete->telephone = $faker->phoneNumber();
            $newAthlete->height_cm = $faker->numberBetween(150, 210);
            $newAthlete->initial_weight = $faker->numberBetween(45, 200);

            $newAthlete->save();
        }


    }
}
