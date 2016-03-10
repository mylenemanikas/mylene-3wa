<!DOCTYPE html>
<html>
<head>
    <style>


    </style>
    <title>ALLOMOVIES</title>
</head>
<body>
<a href="#">ALLOMOVIES</a>
<ul>
    <li><a href="{{ route('static_welcome')}}">Accueil</a></li>
    <li><a href="{{ route('movies_lister')}}">Films</a></li>
    <li><a href="{{ route('categories_lister')}}">Categories</a></li>
    <li><a href="{{ route('actors_lister')}}">Acteurs</a></li>
    <li><a href="{{ route('directors_lister')}}">Réalisateurs</a></li>
</ul>




</body>

</html>