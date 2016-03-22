@extends('layout')
@section('content')
    <div class="creer">
    <h1>Liste de mes films</h1>
    <h3>
        <a href="{{ route('movies_lister')}}">
            {{$movie->title}}
        </a>
    </h3>
    <img class="imagecreer" style="width:80%;" src="{{ $movie->image }}"/>
    {{--HTML rendu--}}
    <p>{!! $movie->synopsis!!}</p>
    </div>
@endsection
