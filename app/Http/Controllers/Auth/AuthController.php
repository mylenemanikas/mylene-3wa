<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Input;
use Validator;
use App\Administrators;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => ['logout','getLogout']]);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'firstname'=> 'required|max:255',
            'email' => 'required|email|max:255|unique:administrators',
            'password' => 'required|confirmed|min:6',
            'description'=>'required|max:2000',
            'photo'=>'required'
        ],[

            'name.required' =>'Votre nom est requis',
            'name.max'=>'Votre nom est trop long',
            'email.required' =>'Votre email est requis',
            'email.unique'=>'Votre email est déjà utilisé',
            'password.required' =>'Votre mots de passe est requis',
            'password.min' =>'Votre mots de passe est trops court',
            'password.confirmed'=>'votre mots de passe doit etre identique',
            'firstname.required'=>'Votre prenom est requis',
            'description.required'=>'Votre description est requise',
            'photo.required'=>'Votre photo est obligatoire',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        $file=Input::file('photo');
        if(Input::hasFile('photo')) {
            $filename = $file->getClientOriginalName();
            $destinationPath=public_path().'/uploads/administrators';
            // Récupère le nom original du fichier
            $file->move($destinationPath, $filename);
        }
      /* if(Input::hasfile($data['photo'])){
            $photo = Input::file($data['photo']);
            $upload = base_path().'/fotoprofil/';
            $filename = $data['nip'].'.jpg';
            $photo->move($upload, $filename);
            $path = $upload.$filename;*/

        return Administrators::create([
            'lastname' => $data['name'], // name : name de l'input et lastname: nom de la colonne
            'firstname' => $data['firstname'],
            'description'=>$data['description'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'photo'=>asset('uploads/administrators/'.$filename),
        ]);
    }
}
