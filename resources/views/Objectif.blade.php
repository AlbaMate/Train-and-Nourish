<!-- resources/views/objectif/index.blade.php -->

@extends('layouts.app')

@section('title', 'Nos Objectifs')

@section('content')
    <div class="container">
        <h1>Choisissez votre Objectif</h1>
        <p>Explorez nos différents objectifs pour trouver celui qui correspond à vos besoins :</p>

        <ul>
            @foreach($objectifs as $objectif)
                <li><a href="#">{{ $objectif }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
