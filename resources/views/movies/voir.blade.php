<html>
    <head>
    </head>
    <body>
    <h1>Liste de mes films</h1>
    <hr />

    <h3>
        <a href="{{ route('movies_lister')}}">
            {{$movie->title}}
            </a>
    </h3>
    <img style="..." src="{{ $movie->image }}"/>
    {{--HTML rendu--}}
    <p>{!! $movie->synopsis!!}</p>
    <ul>
        <li><a href ="{{ route('movies_lister')}}">Home</a></li>
        <li><a href="{{ route('movies_lister')}}">Films</a></li>
        <li><a href="{{ route('categories_lister')}}">Categories</a></li>
        <li><a href="{{ route('actors_lister')}}">Acteurs</a></li>
        <li><a href="{{ route('directors_lister')}}">Réalisateurs</a></li>
    </ul>
    </body>
</html>
