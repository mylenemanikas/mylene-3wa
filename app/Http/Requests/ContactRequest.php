<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'nom' => 'required|min:5|regex:/[a-zA-Z- ]+$/',
            'email' =>'required|email',
            'message'=>'required|min:10',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'nom.required'=>'le nom est obligatoire',
            'email.required'=>'le mail est obligatoire',
            'message.required'=>'le message est obligatoire',
            'message.min'=>'le message doit comporter au moins 10 caractères',
            'nom.min'=>'le nom est trop court',
            'email'=>'ceci n\'est pas un email',


        ];
    }
    public function authorize(){
        return true;
    }
}