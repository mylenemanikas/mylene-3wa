<html>
    <head>
    </head>
    <body>
        <h1>Liste de nos réalisateurs</h1>
        <hr/>
        <p>
            <a href="{{ route('directors_creer')}}">
                Créer un nouveau réalisateur
            </a>
        </p>
        @foreach($directors as $director)
            <h5>{{$director->firstname}}</h5>
            <p>{{$director->lastname}}</p>
        @endforeach
    </body>
</html>
