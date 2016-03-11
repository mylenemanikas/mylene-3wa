<?php

namespace App\Http\Controllers;
use App\Http\Requests\MoviesRequests;
use App\Movies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

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
        /*$movie=Movies::find($id);
        return view ('movies/lister',[
            'movie'=>$movie*/

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
    public function editer($id){
        /*$movies=Movies::find($id);*/
        dump($id);
            return view("movies/editer",
                ["id"=>$id
    ]);
    }
    public function enregistrer(MoviesRequests $request)
    {
        // Créeation de validateur par champs
        //1ere étape: recuperation des données soumises
        $title = $request->title; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $synopsis = $request->synopsis; //$_POST['description']
        //2eme étape:creation en base de donnée du nouveau film
        $movies = new Movies();
        $movies->title = $title; /* title=comme dans php myadmin*/
        $movies->synopsis = $synopsis;
        $movies->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('movies_lister');

    }
    public function visible($id){

        $movies=Movies::find($id);

        if($movies->visible==0) {
            $movies->visible = 1;
        }else{
            $movies->visible=0;
        }
        $movies->save();

        return Redirect::route('movies_lister');
    }
    public function cover($id){

        $movies=Movies::find($id);

        if($movies->cover==0) {
            $movies->cover = 1;
        }else{
            $movies->cover=0;
        }
        $movies->save();

        return Redirect::route('movies_lister');
    }


}
