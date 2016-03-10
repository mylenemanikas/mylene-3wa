<html>
    <head>
    </head>
    <body>
        <h1>creer les films</h1>
        <form method="post" action="{{route('movies_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
            <label for="title">Title:</label>
            <input name="title" id="title"/>
            <label for="synopsis">Synopsis:</label>
            <input id="synopsis" name="synopsis"/>
            <button type="submit">Créer un film</button>
        </form>
    </body>
</html>
