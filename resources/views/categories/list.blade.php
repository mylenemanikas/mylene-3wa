<html>
    <head>
    </head>
    <body>
        <h1>Liste des category</h1>
        @foreach($categories as $categorie)
            <h5>{{$categorie->title}}</h5>
            <p>{{$categorie->description}}</p>
        @endforeach
    </body>
</html>
