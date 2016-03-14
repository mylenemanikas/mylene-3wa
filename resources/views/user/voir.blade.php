@extends('layout')
@section('content')
    <h1>Liste de mes utilisateurs</h1>
    <h3>
        <a href="{{ route('user_lister')}}">
            {{$movie->username}}
        </a>
    </h3>
@endsection
