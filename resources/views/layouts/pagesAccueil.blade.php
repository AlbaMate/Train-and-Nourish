<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Train-and-nourish')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('accueil') }}">Accueil</a></li>
                <li><a href="{{ route('objectif.index') }}">Objectif</a></li>
                <li><a href="{{ route('conseil.index') }}">Conseil Nutrition</a></li>
                <li><a href="{{ route('boutique.index') }}">Boutique</a></li>
                <li><a href="{{ route('login') }}">Se Connecter</a></li>
                <li><a href="{{ route('register') }}">S'inscrire</a></li>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content') <!-- Contenu spécifique à chaque page -->
    </main>

    <footer>
        <p>&copy; 2024 Mon Application. Tous droits réservés.</p>
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
