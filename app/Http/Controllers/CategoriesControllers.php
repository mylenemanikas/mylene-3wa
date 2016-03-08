<?php

namespace App\Http\Controllers;
use App\Categories;
/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class CategoriesControllers extends Controller
{
 /**
  * Methode de controller
  * <=> Action de controller
  */
        public function lister(){
            $categories=Categories::all();
            dump($categories);
            //retourner une vue
            return view('categories/list',[
                "categories"=>$categories
            ]);
}
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function voir($id){
        /*find permet de retrouver un objet par son id*/
        $categories=Categories::find($id);

        //retourner une vue
        return view('categories/voir',[
            "categories"=>$categories
        ]);
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer(){
        //retourner une vue
        return view('categories/creer');
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id){
        //retourner une vue
        return view('categories/editer');
    }
}
