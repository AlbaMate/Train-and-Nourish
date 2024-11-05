@extends('layouts.app') <!-- Utilise la mise en page app.blade.php -->

@section('title', 'Conseils Nutritionnels') <!-- Titre de la page -->

@section('content')
    <div class="container">
        <h1>Conseils en Nutrition</h1>
        <p>Découvrez nos meilleurs conseils pour une alimentation équilibrée et saine.</p>
        
        <h2>Conseil #1 : Mangez des fruits et légumes</h2>
        <p>Les fruits et légumes sont riches en vitamines, minéraux, et fibres. Essayez de consommer au moins 5 portions par jour.</p>

        <h2>Conseil #2 : Limitez les sucres ajoutés</h2>
        <p>Réduisez votre consommation de boissons sucrées et privilégiez l'eau. Les sucres ajoutés peuvent contribuer à la prise de poids et à d'autres problèmes de santé.</p>

        <!-- Ajouter plus de conseils ou un lien vers des articles détaillés -->
    </div>
@endsection
