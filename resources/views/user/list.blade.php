@extends('layout')
@section('content')
    <header>
        <h1>Liste de nos utilisateurs</h1>
    </header>
    <p>
        <a href="{{ route('user_creer')}}">

            Créer un nouvel utilisateur
        </a>
    </p>
    @foreach($user)
            <h5>
                <a href="{{ route('user_voir',
        [
        "id"=>$user->id
        ])}}">  {{$user->username}}
                </a>
            </h5>
        @endforeach
  @endsection
