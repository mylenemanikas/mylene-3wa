<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class AdministratorsRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'firstname'=> 'required|max:255',
            'email' => 'required|email|max:255|unique:administrators,id,'.Auth::user()->id,
            'password' => 'confirmed|min:6',
            'description'=>'required|max:2000',
            'photo'=>'required'
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
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
        ];
    }
    public function authorize(){
        return true;
    }
}