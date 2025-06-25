<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            [
                'name' => 'Panca piana bilanciere',
                'primary_muscle_group' => 'Petto',
                'secondary_muscle_group' => 'Tricipiti',
                'tertiary_muscle_group' => 'Spalle anteriori',
            ],
            [
                'name' => 'Panca inclinata manubri',
                'primary_muscle_group' => 'Petto',
                'secondary_muscle_group' => 'Tricipiti',
                'tertiary_muscle_group' => 'Spalle anteriori',
            ],
            [
                'name' => 'Croci ai cavi',
                'primary_muscle_group' => 'Petto',
                'secondary_muscle_group' => 'Spalle anteriori',
                'tertiary_muscle_group' => 'Tricipiti',
            ],
            [
                'name' => 'Squat bilanciere',
                'primary_muscle_group' => 'Gambe',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Pressa 45°',
                'primary_muscle_group' => 'Gambe',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => 'Polpacci',
            ],
            [
                'name' => 'Affondi con manubri',
                'primary_muscle_group' => 'Gambe',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Stacco da terra',
                'primary_muscle_group' => 'Schiena',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Trazioni alla sbarra',
                'primary_muscle_group' => 'Schiena',
                'secondary_muscle_group' => 'Bicipiti',
                'tertiary_muscle_group' => 'Spalle posteriori',
            ],
            [
                'name' => 'Lat machine avanti',
                'primary_muscle_group' => 'Schiena',
                'secondary_muscle_group' => 'Bicipiti',
                'tertiary_muscle_group' => 'Spalle posteriori',
            ],
            [
                'name' => 'Rematore con bilanciere',
                'primary_muscle_group' => 'Schiena',
                'secondary_muscle_group' => 'Bicipiti',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Military press bilanciere',
                'primary_muscle_group' => 'Spalle',
                'secondary_muscle_group' => 'Tricipiti',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Alzate laterali manubri',
                'primary_muscle_group' => 'Spalle',
                'secondary_muscle_group' => 'Trapezio',
                'tertiary_muscle_group' => 'Core',
            ],
            [
                'name' => 'Curl bilanciere EZ',
                'primary_muscle_group' => 'Bicipiti',
                'secondary_muscle_group' => 'Avambracci',
                'tertiary_muscle_group' => null,
            ],
            [
                'name' => 'Curl manubri alternati',
                'primary_muscle_group' => 'Bicipiti',
                'secondary_muscle_group' => 'Avambracci',
                'tertiary_muscle_group' => null,
            ],
            [
                'name' => 'Pushdown ai cavi',
                'primary_muscle_group' => 'Tricipiti',
                'secondary_muscle_group' => 'Avambracci',
                'tertiary_muscle_group' => null,
            ],
            [
                'name' => 'Dip alle parallele',
                'primary_muscle_group' => 'Tricipiti',
                'secondary_muscle_group' => 'Petto',
                'tertiary_muscle_group' => 'Spalle anteriori',
            ],
            [
                'name' => 'Crunch su panca',
                'primary_muscle_group' => 'Addominali',
                'secondary_muscle_group' => 'Core',
                'tertiary_muscle_group' => null,
            ],
            [
                'name' => 'Plank',
                'primary_muscle_group' => 'Core',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => 'Spalle',
            ],
            [
                'name' => 'Calf raise in piedi',
                'primary_muscle_group' => 'Polpacci',
                'secondary_muscle_group' => null,
                'tertiary_muscle_group' => null,
            ],
            [
                'name' => 'Leg curl sdraiato',
                'primary_muscle_group' => 'Femorali',
                'secondary_muscle_group' => 'Glutei',
                'tertiary_muscle_group' => null,
            ],
        ];

        foreach ($exercises as $exercise) {
            Exercise::create($exercise);
        }
    }
}