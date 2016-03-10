<html>
    <head>
    </head>
    <body>
        <h1>creer des réalisateurs</h1>
        <form method="post" action="{{route('directors_enregistrer')}}">
            <!--important a mettre pour tout formulaire-->     {{csrf_field()}}
            <label for="firstname">Firstname:</label>
            <input name="firstname" id="firstname"/>
            <label for="lastname">Lastname:</label>
            <textarea id="lastname" name="lastname"></textarea>
            <button type="submit">Créer un réalisateur</button>
        </form>
    </body>
</html>
