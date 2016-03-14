<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UserRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'username' => 'required|min:2',
            'email' =>'required|min:2|max:100',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'username.required'=>'le prenom est obligatoire',
            'email.required'=>'le mail est obligatoire',
            'username.min'=>'le prenom est trop court',
            'username.max'=>'le prenom est trop long',
            'email.min'=>'le mail est trop longue',
            'email.max'=>'le mail est trop court',
        ];
    }
    public function authorize(){
        return true;
    }
}