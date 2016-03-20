<?php
/**
 * Created by PhpStorm.
 * User: wal20
 * Date: 11/03/16
 * Time: 09:44
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class CommentsRequests extends FormRequest
{
    /**
     * @return array
     * Création de validateur par champs
     */
    public function rules()
    {
        return [
            'content' => 'required|min:2',
            'note' =>'required|min:2|max:100',
        ];
    }

    /**
     * Personnalise chaque message d'erreur
     *
     */
    public function messages()
    {
        return[
            'content.required'=>'le commentaire est obligatoire',
            'note.required'=>'la note est obligatoire',
            'content.min'=>'le commentaire est trop court',
            'content.max'=>'le commentaire est trop long',
            'note.min'=>'la note est trop basse',
            'note.max'=>'la note est trop elevé',
        ];
    }
    public function authorize(){
        return true;
    }
}