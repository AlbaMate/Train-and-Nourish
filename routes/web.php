<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObjectifController;


Route::get('/', function () {
    return view('home');
});
Route::get('/log in', function () {
    return view('log in');  // Assure-toi d'avoir créé le fichier about.blade.php dans le dossier resources/views
});

Route::get('/register', function () {
    return view('register'); // Assure-toi aussi d'avoir le fichier contact.blade.php
});

 Route::get('/objectif', [ObjectifController::class, 'index'])->name('objectif.index');

Route::get('/conseil-nutrition', [ConseilNutritionController::class, 'index'])->name('conseil.index');

Route::get('/boutique', [BoutiqueController::class, 'index'])->name('boutique.index');
