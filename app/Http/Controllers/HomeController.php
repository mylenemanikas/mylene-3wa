<?php

namespace App\Http\Controllers;
use App\Movies;
use App\Categories;
use App\Actors;
use App\Directors;



/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class HomeController extends Controller
{
 /**
  * Page d'accueil
  *
  */
   public function homepage(){
       $movie=new Movies();
       $nb=$movie->getNbMoviesActifs();
       $nbtotal=$movie->getNbMovies();
       $budget= $movie->getbudget();

       $categorie=new Categories();

       $nbtotalc=$categorie->getNbCategories();

       $actor=new Actors();
       $nbtotala=$actor->getNbActors();
       $moyenneage=$actor->getmoyenneAge();

       $director=new Directors();
       $nbtotald=$director->getNbDirectors();




       return view('static/welcome',
           [
                'nb'=>$nb,
                'nbtotal'=>$nbtotal,
               'nbtotalc'=>$nbtotalc,
               'nbtotala'=>$nbtotala,
               'nbtotald'=>$nbtotald,
               'budget'=>$budget,
               'moyenneage'=>$moyenneage
       ]);
   }

}
