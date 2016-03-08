<html>
    <head>
    </head>
    <body>
        <h1>Liste de nos films</h1>
    @foreach($movies as $movie)
        <h5>
            <a href="{{ route('movies_voir',
        [
        "id"=>$movie->id
        ])}}">  {{$movie->title}}
            </a></h5>
        <p>{{$movie->description}}</p>
    @endforeach
    </body>
</html>
