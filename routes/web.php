<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/log in', function () {
    return view('log in');  // Assure-toi d'avoir créé le fichier about.blade.php dans le dossier resources/views
});

Route::get('/register', function () {
    return view('register'); // Assure-toi aussi d'avoir le fichier contact.blade.php
});
