<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ObjectifsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('objectifs')->insert([
            [
                'utilisateur_id' => 1,
                'objectif' => 'Perdre du poids',
                'description' => 'Plan cardio intense',
                'date_creation' => now(),
            ],
            [
                'utilisateur_id' => 1,
                'objectif' => 'Musculation',
                'description' => 'Augmenter la masse musculaire',
                'date_creation' => now(),
            ],
            [
                'utilisateur_id' => 2,
                'objectif' => 'Cardio',
                'description' => 'Améliorer l’endurance et la santé cardiovasculaire',
                'date_creation' => now(),
            ],
            [
                'utilisateur_id' => 2,
                'objectif' => 'Se raffermir',
                'description' => 'Tonifier le corps avec des exercices ciblés',
                'date_creation' => now(),
            ],
            [
                'utilisateur_id' => 3,
                'objectif' => 'Bien-être',
                'description' => 'Approche équilibrée pour un esprit et un corps sains',
                'date_creation' => now(),
            ],
        ]);
    }
}