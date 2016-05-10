<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class InscriptionRequest extends Request
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
		'email' => 'required|email|unique:emails',
		'telephone' => 'required|size:10|alpha_num',
		'nom' => 'required|max:255|alpha',
		'prenom' => 'required|max:255|alpha',
		'password' => 'required|max:255|min:6|alpha_num',
		'confirm_password' => 'required|same:password',
		'adresse' => 'required|max:255|string',
		'code_postal' => 'required|max:96000|numeric',
		'ville' => 'required|max:255|string',
		'jour' => 'required',
		'checkbox1' => 'required',
		'checkbox2' => 'required'
		
		];
    }
}
