<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommandesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('commandes')->insert([
            ['utilisateur_id' => 1, 'montant_total' => 49.99, 'statut' => 'validée', 'date_commande' => now()],
            ['utilisateur_id' => 2, 'montant_total' => 29.99, 'statut' => 'en cours', 'date_commande' => now()],
        ]);
    }
};