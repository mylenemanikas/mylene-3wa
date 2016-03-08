<?php

namespace App\Http\Controllers;
use App\Directors;

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
        dump($directors);
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
            "directors"=>$directors
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
    public function editer($id){
        //var_dump($variable)<=>dump()
        //dump() fct de debogage des variables
        // Deboger mon id
        dump($id);
        $prenom = 'mylene';

        //retourner une vue

        return view('directors/editer',[
            'id' =>$id,
            'prenom' =>$prenom,
            ]);
    }
}
