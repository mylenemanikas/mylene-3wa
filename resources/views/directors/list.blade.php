<html>
    <head>
    </head>
    <body>
        <h1>Liste de nos directors</h1>
        @foreach($directors as $director)
            <h5>{{$director->firstname}}</h5>
            <p>{{$director->lastname}}</p>
        @endforeach
    </body>
</html>
