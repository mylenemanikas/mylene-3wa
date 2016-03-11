@extends('layout')
@section('content')
    <header>
        <h1>Liste de nos films</h1>
    </header>
    <p>
        <a href="{{ route('movies_creer')}}">

            Créer un nouveau film
        </a>
    </p>
    @foreach($movies as $movie)
            <h5>
                <a href="{{ route('movies_voir',
        [
        "id"=>$movie->id
        ])}}">  {{$movie->title}}
                </a>
            </h5>
            <p>
                @if($movie->visible==1)
                    <a href="{{ route('movies_visible',
                ["id" => $movie->id]
                 ) }}">
                        <p>rendre visible</p>
                    </a>
                @else
                    <a href="{{ route('movies_visible',
                ["id" => $movie->id]
                 ) }}">
                        <p>rendre invisible</p>
                    </a>
                @endif
            </p>
            <p>
                @if($movie->cover==1)
                    <a href="{{ route('movies_cover',
                ["id" => $movie->id]
                 ) }}">
                        <p>cover</p>
                    </a>
                @else
                    <a href="{{ route('movies_cover',
                ["id" => $movie->id]
                 ) }}">
                        <p>uncover</p>
                    </a>
                @endif
            </p>

            <p>{!!$movie->description!!}</p>
        @endforeach
  @endsection
