<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Movies;
use App\Categories;
use App\Actors;
use App\Directors;
use App\User;
use App\Sessions;
use App\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function modifier(Requests\AdministratorsRequests $request)
    {

// Récupérer mes données en $request

        //modifier $user
        //save()
        //

        /*return Redirect::route('movies_lister');*/
        // Créeation de validateur par champs
        //1ere étape: recuperation des données soumises
        $firstname = $request->firstname; // title est le name de mon champs
        $name = $request->name;
        $description=$request->description;
        $email=$request->email;
        $password=$request->password;
        //                       $request->title<=>$_POST['title']
        $photo=$request->photo;

        $user=Auth::user();
        //2eme étape:creation en base de donnée du nouveau film

        $user->firstname = $firstname; /* title=comme dans php myadmin*/
        $user->lastname = $name;
        $user->description = $description;
        $user->email = $email;

        if($request->hasFile("photo")) {
            $filename = $photo->getClientOriginalName(); //Récupère le nom original du fichier
            $destinationPath = public_path() . "/uploads/Administrators";//Indique ou stocker le fichier

            $photo->move($destinationPath, $filename);// Déplace le fichier
            $user->photo = asset('uploads/administrators/' . $filename);// ma colonne image qui sera le chemin vers mon fichier
        }
        //asset: genere une url

        // has() permet de dire si un champs existe et n'est pas vide
        if($request->has("password")) {
           $user->password=bcrypt($password);
        }

        $user->save();
        //save() permet de sauvegarder mon objet en base de données
// 3eme étape: redirection...
        //redirection a partir de ma route
        return Redirect::route('static_welcome');


    }
    public function compte(){
        return view("compte",
            [
            ]);


    }
    public function recherche(Request $request) {
        dd($request->all());
    }

    public function homepage(){
        $movie=new Movies();
        $nb=$movie->getNbMoviesActifs();
        $nbtotal=$movie->getNbMovies();
        $budget= $movie->getbudget();
        $nextseance=$movie->getnextseance();
        $va=$movie->getvideoaleatoire();
//dump($va);
        $categorie=new Categories();

        $nbtotalc=$categorie->getNbCategories();

        $actor=new Actors();
        $nbtotala=$actor->getNbActors();
        $moyenneage=$actor->getmoyenneAge();

        $director=new Directors();
        $nbtotald=$director->getNbDirectors();

        $user=new User();
        $nbU=$user->getNbUserActifs();
        $nbtotalU=$user->getNbUser();
        $lastuser=$user->getlastuser();

        $sessions=new Sessions();
        $prochainesession=$sessions->getprochainesession();
// dump($prochainesession);

        $comments=new Comments();
        $com=$comments->getcommentaire();




        return view('static/welcome',
            [
                'nb'=>$nb,
                'nbtotal'=>$nbtotal,
                'nbtotalc'=>$nbtotalc,
                'nbtotala'=>$nbtotala,
                'nbtotald'=>$nbtotald,
                'budget'=>$budget,
                'moyenneage'=>$moyenneage,
                'nbU'=>$nbU,
                'nbtotalU'=>$nbtotalU,
                'nextseance'=>$nextseance,
                'prochainesession'=>$prochainesession,
                'lastuser'=>$lastuser,
                'va'=>$va,
                'com'=>$com
            ]);
    }
}
