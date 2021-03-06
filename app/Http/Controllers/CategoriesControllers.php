<?php

namespace App\Http\Controllers;
use App\Categories;
use App\Http\Requests\CategoriesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


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
    public function lister()
    {
        $categories = Categories::all();
        //retourner une vue
        return view('categories/list', [
            "categories" => $categories
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function voir($id)
    {
        /*find permet de retrouver un objet par son id*/
        $categories = Categories::find($id);

        //retourner une vue
        return view('categories/voir', [
            "categories" => $categories
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer()
    {
        //retourner une vue
        return view('categories/creer');
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id)
    {
        //retourner une vue
        return view('categories/editer');
    }

    /**
     * Enregistrer un film depuis mes données soumises en formulaire
     */
    public function enregistrer(CategoriesRequests $request)
    {
        //1ere étape: recuperation des données soumises
        $titre = $request->title; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $description = $request->description; //$_POST['description']
        $file=$request->image;

        $categories = new Categories();

        // Si ma requete contient un fichier de name "image"
        if($request->hasFile("image")){
            $filename=$file->getClientOriginalName(); //Récupère le nom original du fichier
            $destinationPath=public_path()."/upload/categories";//Indique ou stocker le fichier

            $file->move($destinationPath, $filename);// Déplace le fichier
            $categories->image= asset('upload/categories/'.$filename);// ma colonne image qui sera le chemin vers mon fichier

        }

        //2eme étape:creation en base de donnée du nouveau film
        $categories->title = $titre;
        $categories->description = $description;
        $categories->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('categories_lister');

    }
    public function supprimer($id){
        $category = Categories::find($id);
        $category->delete();//delete(): supprimer
        return Redirect::route('categories_lister');
    }
}
