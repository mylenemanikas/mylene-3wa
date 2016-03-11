<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <style>

        html{

            width: 100%;
            font-size:62.5%

        }
        .container{
            text-align: center;
        }
        .container a{
            color: pink;
            text-decoration: none;
            font-size: 8rem;
            font-family: "Lato";
        }
        .menu{
            text-align: center;
        }
        .menu a {
          text-decoration: none;

            font-size: 4rem;
            color:skyblue;
        }
        .menu ul{
            list-style-type: none;
        }
    </style>
    <title>ALLOMOVIES</title>
</head>
<body>
<div class="container">
<a href="#"><strong>ALLOMOVIES</strong></a>
</div>
<div class="menu">
<ul>
    <li><a href="{{ route('static_welcome')}}">Accueil</a></li>
    <li><a href="{{ route('movies_lister')}}">Films</a></li>
    <li><a href="{{ route('categories_lister')}}">Categories</a></li>
    <li><a href="{{ route('actors_lister')}}">Acteurs</a></li>
    <li><a href="{{ route('directors_lister')}}">Réalisateurs</a></li>
</ul>
</div>



</body>

</html>