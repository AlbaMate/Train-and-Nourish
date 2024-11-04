@extends('layouts.app') <!-- Étend la mise en page principale -->

@section('title', 'train-and-nourish') 

@section('content') <!-- Contenu spécifique à la page d'accueil -->


<div class="text-center">
    <h1 class="text-4xl font-bold">Bienvenue sur notre page d'accueil</h1>
    <!-- <p class="mt-4">Ceci est le contenu de la page d'accueil.</p> -->
</div>
<div class="image-container">
    <img src="{{ asset('assets/man-2264825_1280.jpg') }}" alt="Description de l'image" class="full-width-image">
</div>

@endsection
