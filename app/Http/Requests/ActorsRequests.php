<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ActorsRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'firstname' => 'required|min:2',
            'lastname' =>'required|min:2|max:100',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'firstname.required'=>'le prenom est obligatoire',
            'lastname.required'=>'la nom est obligatoire',
            'firstname.min'=>'le prenom est trop court',
            'firstname.max'=>'le prenom est trop long',
            'lastname.min'=>'la nom est trop longue',
            'lastname.max'=>'la nom est trop court',
        ];
    }
    public function authorize(){
        return true;
    }
}