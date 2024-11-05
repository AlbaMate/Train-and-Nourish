@extends('layouts.app') <!-- Utilise la mise en page app.blade.php -->

@section('title', 'Registre') <!-- Titre de la page -->

@section('content')
    <div class="container">
        <h1>Créer un compte</h1>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="name">Nom :</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div>
                <label for="password_confirmation">Confirmer le mot de passe :</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
@endsection
