<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'train-and-nourish')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a href="#" class="navbar-brand">Train-and-Nourish</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Accueil
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="nav-link" href="{{ route('objectif.index') }}">Objectif</a></li>
                                <li><a class="dropdown-item" href="{{ url('/nutrition') }}">Nutrition</a></li>
                                <li><a class="dropdown-item" href="{{ route('conseil.index') }}">Conseils</a></li>
                                <li><a class="dropdown-item" href="{{ route('boutique.index') }}">Boutique</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/login') }}" class="nav-link">Se connecter</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('/register') }}" class="nav-link">S'inscrire</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main content wrapper -->
    <main class="container mt-4">
        @yield('content')
    </main>

    <!-- Footer section -->
    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; {{ date('Y') }} Train-and-Nourish - Tous droits réservés</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/script.js') }}" defer></script>
</body>
</html>
