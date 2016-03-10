<html>
    <head>
    </head>
    <body>
        <h1>Liste des category</h1>
        <hr/>
        <p>
        <a href="{{ route('categories_creer')}}">
            Créer une nouvelle catégorie
        </a>
        </p>
        @foreach($categories as $categorie)
            <h5>{{$categorie->title}}</h5>
            <p>{{$categorie->description}}</p>
            <p><a href="{{route("category_supprimer",['id'=>$categorie->id]) }}">Supprimer</a></p>
        @endforeach
    </body>
</html>
