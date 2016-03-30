<?php

namespace App\Http\Controllers;

/**
 * Class MoviesControllers
 * @package App\Http\Controllers
 * Chaque controller doit être suffixé par le mot clé Controller et doit heriter de  ma classe controller
 */
class StaticControllers extends Controller
{
    public function welcome(){
        //retourner une vue
        return view('static/welcome');
    }
    public function contact(){
        //retourner une vue
        return view('static/contact');
    }

}
