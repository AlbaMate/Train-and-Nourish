<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtilisateursSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('utilisateurs')->insert([
                [
                    'nom' => 'John Doe',
                    'email' => 'johndoe@example.com',
                    'password' => Hash::make('password123'), // Mot de passe haché
                    'date_creation' => now(),
                ],
                [
                    'nom' => 'Jane Smith',
                    'email' => 'janesmith@example.com',
                    'password' => Hash::make('securepassword'), // Mot de passe haché
                    'date_creation' => now(),
                ],
            ]);
        }
    }