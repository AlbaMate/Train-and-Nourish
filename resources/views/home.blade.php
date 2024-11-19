@extends('layouts.app')

@section('title', 'train-and-nourish')

@section('content') <!-- Contenu spécifique à la page d'accueil -->

<!-- Conteneur de l'image avec texte superposé -->
<div class="image-container">
    <img src="{{ asset('assets/man-2264825_1280.jpg') }}" alt="Description de l'image" class="full-width-image">

    <!-- Texte superposé sur l'image -->
    <div class="text-overlay">
        <h2 class="text-3xl font-semibold">"Bienvenue chez Train and Nourish — votre espace dédié à la force, la vitalité et au bien-être."</h2>
    </div>
</div>

<!-- Autres sections -->
<div class="phrase-container text-center mt-5">
    <h2 class="text-3xl font-semibold">"Du bien-être à la performance : chaque objectif compte."</h2>
</div>

<div class="objectifs-container">
    <a href="{{ url('/objectif/minceur') }}" class="objectif-card">Minceur</a>
    <a href="{{ url('/objectif/prise-de-muscle') }}" class="objectif-card">Prise de muscle</a>
    <a href="{{ url('/objectif/cardio') }}" class="objectif-card">Cardio</a>
    <a href="{{ url('/objectif/bien-etre') }}" class="objectif-card">Bien-être</a>
    <a href="{{ url('/objectif/se-raffermir') }}" class="objectif-card">Se raffermir</a>
</div>

<div class="image-cards">
    <div class="card">
        <a href="{{ url('/objectif/minceur') }}">
            <img src="{{ asset('assets/minceur.jpg') }}" alt="Minceur">
            <div class="card-content">
                <!-- <h3>Minceur</h3>
                <p>Atteignez votre poids idéal avec des exercices adaptés.</p> -->
            </div>
        </a>
    </div>
    <div class="card">
        <a href="{{ url('/objectif/musculation') }}">
            <img src="{{ asset('assets/musculation.jpg') }}" alt="Prise de muscle">
            <div class="card-content">
                <!-- <h3>Prise de muscle</h3>
                <p>Développez votre masse musculaire de manière efficace.</p> -->
            </div>
        </a>
    </div>
    <div class="card">
        <a href="{{ url('/objectif/cardio') }}">
            <img src="{{ asset('assets/action-cardio.jpg') }}" alt="Cardio">
            <div class="card-content">
                <!-- <h3>Cardio</h3>
                <p>Améliorez votre endurance et votre santé cardio.</p> -->
            </div>
        </a>
    </div>
    <div class="card">
        <a href="{{ url('/objectif/bien-etre') }}">
            <img src="{{ asset('assets/bien être_files/ai-generated-8563109_1280.webp') }}" alt="Bien-être">
            <div class="card-content">
                <!-- <h3>Bien-être</h3>
                <p>Équilibrez corps et esprit pour un bien-être complet.</p> -->
            </div>
        </a>
    </div>
    <div class="card">
        <a href="{{ url('/objectif/se-raffermir') }}">
            <img src="{{ asset('assets/se rafermir3.png') }}" alt="Se raffermir">
            <div class="card-content">
                <!-- <h3>Se raffermir</h3>
                <p>Tonifiez votre corps pour un look sculpté.</p> -->
            </div>
        </a>
    </div>
</div>

@endsection
