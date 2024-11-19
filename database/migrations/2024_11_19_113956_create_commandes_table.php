<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('commandes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('utilisateur_id')->constrained('utilisateurs')->onDelete('cascade'); // Clé étrangère vers utilisateurs
            $table->decimal('montant_total', 10, 2); // Montant total de la commande
            $table->string('statut')->default('en cours'); // Statut de la commande (ex : en cours, validée)
            $table->timestamp('date_commande')->useCurrent(); // Date de la commande
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('commandes');
    }
};