<?php

namespace App\Http\Controllers;
use App\Movies;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class MoviesControllers extends Controller
{
 /**
  * Methode de controller
  * <=> Action de controller
  */
    public function lister(){
        $movies=Movies::all();
        dump($movies);
        //retourner une vue
    return view('movies/list',[
    "movies"=>$movies
    ]);
}
    /**
     * Methode de controller
     * <=> Action de controller
     */

    public function voir($id){
        /*find permet de retrouver un objet par son id*/
        $movie=Movies::find($id);

        //retourner une vue
        return view('movies/voir',[
            "movie"=>$movie
        ]);
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer(){
        //retourner une vue
        return view('movies/creer');
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer(){
        //retourner une vue
        return view('movies/editer');
    }
}
