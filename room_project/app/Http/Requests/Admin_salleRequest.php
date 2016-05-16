<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class Admin_salleRequest extends Request
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
		'nom_salle' => 'required|alpha',
		'numero_salle' => 'required|numeric',
		'adresse_salle' => 'required|alpha',
		'tarif_salle' => 'required|numeric',
		'capacite_salle' => 'required|numeric',
		'caution_salle' => 'required|numeric'
		];
    }
}
