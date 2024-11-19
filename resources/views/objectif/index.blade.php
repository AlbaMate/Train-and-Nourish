@extends('layouts.app') <!-- Layout commun pour ta navbar -->

@section('title', 'Objectifs')

@section('content')

    <link rel="stylesheet" href="{{ asset('css/objectif.css') }}">

    <!-- Titre de la page -->
    <h1>Nos Objectifs</h1>

    <!-- Conteneur des objectifs -->
    <div class="objectifs-container">
        @foreach($objectifs as $objectif)
            <div class="objectif-item">
                {{ $objectif }}
            </div>
        @endforeach
    </div>
@endsection
