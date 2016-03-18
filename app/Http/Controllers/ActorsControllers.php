<?php

namespace App\Http\Controllers;
use App\Actors;
use App\Http\Requests\ActorsRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class ActorsControllers extends Controller
{
 /**
  * Methode de controller
  * <=> Action de controller
  */
    public function lister(Request $request){
        $actors=Actors::all();
        $id_actors=$request->session()->get('id_actors');
        //dump($id_movies);
        //retourner une vue
        return view('actors/list',[
            "actors"=>$actors
        ]);

}
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function voir($id){
        /*find permet de retrouver un objet par son id*/
        $actors=Actors::find($id);

        //retourner une vue
        return view('actors/voir',[
            "actors"=>$actors
        ]);
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer(){
        //retourner une vue
        return view('actors/creer');
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id){
        //retourner une vue
        return view('actors/editer');
    }
    public function enregistrer(ActorsRequests $request)
    {
        //1ere étape: recuperation des données soumises
        $firstname = $request->firstname; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $lastname = $request->lastname; //$_POST['description']
        //2eme étape:creation en base de donnée du nouveau film
        $actors = new Actors();
        $actors->firstname = $firstname;
        $actors->lastname = $lastname;
        $actors->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('actors_lister');

    }
    public function favoris(Request $request,$id){

        $actor=Actors::find($id);
        // dd($movie);
        // 1. enregistrer en session l'id
        //Requete fait appel à la session
        // put permet d'enregistrer en session a base d'une clef qui est id_movies et d'une valeure: $id

        // get je recupère en session mon tableau par sa clef'id_movies' si mon tableau n'existe pas en session j'initialise un tableau vide
        $tab=$request->session()->get('id_actors',[]);
        if(array_key_exists($id,$tab)){
            unset($tab[$id]);
            // supprime mon élément du tableau
        }else {
            $tab[$id] = [
                'nom' => $actor->firstname . " " . $actor->lastname,
                'city' => $actor->city
            ];// ajouter un tableau dans un tableau
        }
        //  je viens enregistrer mon tableau
        //Ajouté un id dans mon tableau de movies
        $request->session()->put('id_actors',$tab);


        //2. rediriger vers la liste des films
        return Redirect:: route('actors_lister');


    }
    public function supprimer($id){
        $category = Actors::find($id);
        $category->delete();//delete(): supprimer
        return Redirect::route('actors_lister');
    }


    public function actualise(Request $request){

        $request->session()->forget('id_actors');

        return Redirect::route('actors_lister');
    }

}
