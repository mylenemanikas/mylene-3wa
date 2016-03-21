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
    public function lister(Request $request)
    {

        /*$movie=Movies::find($id);
        return view ('movies/lister',[
            'movie'=>$movie*/

        $movies = Movies::all();
// $request->() accéder à la session
        // get fonction pour récupérer des donnée à partir de la clef
        $id_movies = $request->session()->get('id_movies');
        //dump($id_movies);


        //retourner une vue
        return view('movies/list', [
            "movies" => $movies
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */

    public function voir(Request $request, $id)
    {

        $id_movies = $request->session()->get('id_movies');
        //dump($id_movies);


        /*find permet de retrouver un objet par son id*/
        $movie = Movies::find($id);


        //retourner une vue
        return view('movies/voir', [
            "movie" => $movie
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer()
    {

        //retourner une vue
        return view('movies/creer');
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id)
    {
        /*$movies=Movies::find($id);*/

        dump($id);
        return view("movies/editer",
            ["id" => $id
            ]);
    }

    public function enregistrer(MoviesRequests $request)
    {
        // Créeation de validateur par champs
        //1ere étape: recuperation des données soumises
        $title = $request->title; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $synopsis = $request->synopsis; //$_POST['description']
        $languages = $request->languages;
        $bo = $request->bo;
        $annee = $request->annee;
        $date_release = $request->date_release;
        $file=$request->image;

        //2eme étape:creation en base de donnée du nouveau film
        $movies = new Movies();


        if($request->hasFile("image")) {
            $filename = $file->getClientOriginalName(); //Récupère le nom original du fichier
            $destinationPath = public_path() . "/upload/movies";//Indique ou stocker le fichier

            $file->move($destinationPath, $filename);// Déplace le fichier
            $movies->image = asset('upload/movies/' . $filename);// ma colonne image qui sera le chemin vers mon fichier
        }

        $movies->title = $title; /* title=comme dans php myadmin*/
        $movies->synopsis = $synopsis;
        $movies->languages = $languages;
        $movies->bo = $bo;
        $movies->annee = $annee;
        $movies->date_release = $date_release;
        $movies->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('movies_lister');

    }

    public function visible($id)
    {

        $movies = Movies::find($id);

        if ($movies->visible == 0) {
            $movies->visible = 1;
        } else {
            $movies->visible = 0;
        }
        $movies->save();

        return Redirect::route('movies_lister');
    }

    public function cover($id)
    {

        $movies = Movies::find($id);

        if ($movies->cover == 0) {
            $movies->cover = 1;
        } else {
            $movies->cover = 0;
        }
        $movies->save();

        return Redirect::route('movies_lister');
    }

    // id va chercher les arguments de ma route
    public function panier(Request $request, $id)
    {

        $movie = Movies::find($id);
        // dd($movie);
        // 1. enregistrer en session l'id
        //Requete fait appel à la session
        // put permet d'enregistrer en session a base d'une clef qui est id_movies et d'une valeure: $id

        // get je recupère en session mon tableau par sa clef'id_movies' si mon tableau n'existe pas en session j'initialise un tableau vide
        $tab = $request->session()->get('id_movies', []);

        if (array_key_exists($id, $tab)) {
            unset($tab[$id]);
            // supprime mon élément du tableau
        } else {
            $tab[$id] = $movie->title;// ajouter un id dans un tableau
        }


        //  je viens enregistrer mon tableau
        //Ajouté un id dans mon tableau de movies
        $request->session()->put('id_movies', $tab);


        //2. rediriger vers la liste des films
        return Redirect:: route('movies_lister');


    }

    public function actualise(Request $request)
    {

        $request->session()->forget('id_movies');

        return Redirect::route('movies_lister');
    }

        public function actualiserelement(Request $request, $id)
    {
        $tab = $request->session()->get('id_movies', []);
        unset($tab[$id]);

        $request->session()->put('id_movies', $tab);
        return Redirect::route('movies_lister');
    }
}