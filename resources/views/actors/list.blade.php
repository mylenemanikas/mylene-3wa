@extends('layout')
@section('content')
        <h1>Liste de nos acteurs</h1>
        <hr/>
        <p>
            <a href="{{ route('actors_creer')}}">
                Créer un nouvel acteur
            </a>
        </p>
        @foreach($actors as $actor)
            <h5>{{$actor->firstname}}</h5>
            <p>{{$actor->lastname}}</p>
        @endforeach
    @endsection
