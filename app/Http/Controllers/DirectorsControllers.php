<?php

namespace App\Http\Controllers;
use App\Directors;
use App\Http\Requests\DirectorsRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class DirectorsControllers extends Controller
{
 /**
  * Methode de controller
  * <=> Action de controller
  */
    public function lister(){
        $directors=Directors::all();

        //retourner une vue
        return view('directors/list',[
            "directors"=>$directors
        ]);
}
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function voir($id){
        /*find permet de retrouver un objet par son id*/
        $directors=Directors::find($id);

        //retourner une vue
        return view('directors/voir',[
            'directors'=>$directors,
        ]);
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer(){
        //retourner une vue
        return view('directors/creer');
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id)
    {
        //var_dump($variable)<=>dump()
        //dump() fct de debogage des variables
        // Deboger mon id
        dump($id);
        $prenom = 'mylene';

        //retourner une vue

        return view('directors/editer', [
            'id' => $id,
            'prenom' => $prenom,
        ]);
    }
        public function enregistrer(DirectorsRequests $request)
        {
            //1ere étape: recuperation des données soumises
            $firstname = $request->firstname; // title est le name de mon champs
            //                       $request->title<=>$_POST['title']
            $lastname = $request->lastname; //$_POST['description']
            //2eme étape:creation en base de donnée du nouveau film
            $directors = new Directors();
            $directors->firstname = $firstname;
            $directors->lastname = $lastname;
            $directors->save();
            //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
            //redirection a partir de ma route
            return Redirect::route('directors_lister');

        }
    public function supprimer($id){
        $category = Directors::find($id);
        $category->delete();//delete(): supprimer
        return Redirect::route('directors_lister');
    }

}
