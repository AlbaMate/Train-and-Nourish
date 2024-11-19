<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->id(); // Crée une colonne ID auto-incrémentée (clé primaire)
            $table->string('nom'); // Colonne nom
            $table->string('email')->unique(); // Colonne email unique
            $table->string('password'); // Colonne mot de passe
            $table->timestamp('date_creation')->useCurrent(); // Date de création par défaut à l'heure actuelle
            $table->timestamps(); // Crée created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
