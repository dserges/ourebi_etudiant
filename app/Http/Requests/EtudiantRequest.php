<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EtudiantRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nom' => 'required|max:7',
            'prenom' => 'required',
            'filiere' => 'required',
            'classe' => 'required',
        ];
    }
    
    public function messages()
    {
        return [
            'nom.required' => 'Le champ nom est obligatoire',
            'nom.max' => 'Le champ nom ne doit pas excéder :max Caractères',
            'prenom.required' => 'Le champ prenom est obligatoire',
            'filiere.required' => 'Le champ filiere est obligatoire',
            'classe.required' => 'Le champ classe est obligatoire',
        ];
    } 
}
