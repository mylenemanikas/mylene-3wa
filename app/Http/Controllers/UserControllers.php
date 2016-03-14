<?php

namespace App\Http\Controllers;
use App\Http\Requests\MoviesRequests;
use App\Http\Requests\UserRequests;
use App\Movies;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class UserControllers extends Controller
{
 /**
  * Methode de controller
  * <=> Action de controller
  */
    public function lister(){
        /*$movie=Movies::find($id);
        return view ('movies/lister',[
            'movie'=>$movie*/

        $user=User::all();
        dump($user);
        //retourner une vue
        return view('user/list',[
        "user"=>$user
        ]);
}
    /**
     * Methode de controller
     * <=> Action de controller
     */

    public function voir($id){
        /*find permet de retrouver un objet par son id*/
        $user=User::find($id);

        //retourner une vue
        return view('user/voir',[
            "user"=>$user
        ]);
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function creer(){
        //retourner une vue
        return view('user/creer');
    }
    /**
     * Methode de controller
     * <=> Action de controller
     */
    public function editer($id){
        /*$movies=Movies::find($id);*/
        dump($id);
            return view("user/editer",
                ["id"=>$id
    ]);
    }
    public function enregistrer(UserRequests $request)
    {
        // Créeation de validateur par champs
        //1ere étape: recuperation des données soumises
        $username = $request->username; // title est le name de mon champs
        //                       $request->title<=>$_POST['title']
        $email = $request->email; //$_POST['description']


        //2eme étape:creation en base de donnée du nouveau film
        $user = new User();
        $user->username = $username; /* title=comme dans php myadmin*/
        $user->email = $email;
        $user->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('user_lister');

    }
}
