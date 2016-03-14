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
    public function lister(){
        $actors=Actors::all();

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
}
