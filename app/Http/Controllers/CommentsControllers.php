<?php

namespace App\Http\Controllers;

use App\Http\Requests\CommentsRequests;
use App\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class CommentsControllers extends Controller
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

        $comments = Comments::all();
// $request->() accéder à la session
        // get fonction pour récupérer des donnée à partir de la clef
        $id_comments = $request->session()->get('id_comments');
        //dump($id_movies);


        //retourner une vue
        return view('comments/list', [
            "comments" => $comments
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */

    public function voir(Request $request, $id)
    {

        $id_comments = $request->session()->get('id_comments');
        //dump($id_movies);


        /*find permet de retrouver un objet par son id*/
        $comments = Comments::find($id);


        //retourner une vue
        return view('comments/voir', [
            "comments" => $comments
        ]);
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer()
    {

        //retourner une vue
        return view('comments/creer');
    }

    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id)
    {
        /*$movies=Movies::find($id);*/

       // dump($id);
        return view("comments/editer",
            ["id" => $id
            ]);
    }

    public function enregistrer(CommentsRequests $request)
    {
        // Créeation de validateur par champs
        //1ere étape: recuperation des données soumises
        $content = $request->content; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $note = $request->note; //$_POST['description']

        //2eme étape:creation en base de donnée du nouveau film
        $comments = new Comments();
        $comments->content = $content; /* title=comme dans php myadmin*/
        $comments->note = $note;

        $comments->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('comments_lister');

    }
    public function actualiserelement(Request $request, $id)
    {
        $tab = $request->session()->get('id_comments', []);
        unset($tab[$id]);

        $request->session()->put('id_comments', $tab);
        return Redirect::route('static_welcome');
    }

}