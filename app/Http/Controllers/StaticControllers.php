<?php

namespace App\Http\Controllers;
use App\Static;
use Illuminate\Support\Facades\Redirect;

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


}
