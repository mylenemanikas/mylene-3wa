<?php

namespace App\Http\Controllers;
use App\Actors;

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
        dump($actors);
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
}
