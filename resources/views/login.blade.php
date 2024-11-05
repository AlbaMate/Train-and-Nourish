@extends('layouts.app')

@section('title', 'Connexion')

@section('content')
    <div class="container">
        <h1>Se Connecter</h1>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="password">Mot de passe :</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Se connecter</button>
        </form>
    </div>
@endsection
