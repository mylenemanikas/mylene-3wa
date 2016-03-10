<html>
    <head>
    </head>
    <body>
        <h1> créer des categories</h1>
        @if(count($errors->all()))
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    <form method="post" action="{{route('categories_enregistrer')}}">
   <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
        <label for="title">Titre:</label>
        <input name="title" id="title"/>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
        <button type="submit">Créer cette catégorie</button>
    </form>
    </body>
</html>
