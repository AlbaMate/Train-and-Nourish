<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class objectifController extends Controller
{
    public function index()
    {
        // Liste des objectifs que tu veux afficher
        $objectifs = [
            'Minceur',
            'Prise de muscle',
            'Cardio',
            'Se raffermir',
            'Bien-être'
        ];

        // Passe les objectifs à la vue
        return view('objectif.index', compact('objectifs'));
    }
}
