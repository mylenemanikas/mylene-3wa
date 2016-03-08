<html>
    <head>
    </head>
    <body>
        <h1>Liste de nos acteurs</h1>
        @foreach($actors as $actor)
            <h5>{{$actor->firstname}}</h5>
            <p>{{$actor->lastname}}</p>
        @endforeach
    </body>
</html>
