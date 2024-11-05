@extends('layouts.app') <!-- Utilise la mise en page app.blade.php -->

@section('title', 'Boutique') <!-- Titre de la page -->

@section('content')
    <div class="container">
        <h1>Bienvenue dans notre Boutique</h1>
        <p>Découvrez notre sélection de produits pour soutenir votre santé et bien-être.</p>

        <div class="product-list">
            <!-- Exemple de produits, tu peux récupérer ces éléments dynamiquement -->
            <div class="product">
                <h2>Produit 1 : Complément Vitamines</h2>
                <p>Un complément complet de vitamines pour booster votre énergie au quotidien.</p>
                <p>Prix : 20€</p>
                <button>Ajouter au panier</button>
            </div>

            <div class="product">
                <h2>Produit 2 : Protéines en poudre</h2>
                <p>Protéines de haute qualité pour les athlètes et les amateurs de fitness.</p>
                <p>Prix : 30€</p>
                <button>Ajouter au panier</button>
            </div>

            <div class="product">
                <h2>Produit 3 : Barres énergétiques</h2>
                <p>Barres saines et savoureuses pour les en-cas entre les repas.</p>
                <p>Prix : 10€</p>
                <button>Ajouter au panier</button>
            </div>
        </div>
    </div>
@endsection
