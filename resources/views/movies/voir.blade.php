@extends('layout')
@section('content')
    <h1>Liste de mes films</h1>
    <h3>
        <a href="{{ route('movies_lister')}}">
            {{$movie->title}}
        </a>
    </h3>
    <img style="..." src="{{ $movie->image }}"/>
    {{--HTML rendu--}}
    <p>{!! $movie->synopsis!!}</p>

@endsection
