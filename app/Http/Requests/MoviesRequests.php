<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:26
 */

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MoviesRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'title' => 'required|min:10',
            'description' =>'required|min:10|max:250',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'title.required'=>'le titre est obligatoire',
            'description.required'=>'la description est obligatoire',
            'title.min'=>'le titre est trop court',
            'title.max'=>'le titre est trop long',
            'description.min'=>'la description est trop longue',
            'description.max'=>'la description est trop courte',
        ];
    }
    public function authorize(){
        return true;
    }
}