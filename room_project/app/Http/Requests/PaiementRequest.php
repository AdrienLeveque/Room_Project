<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PaiementRequest extends Request
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
		'type_carte' => 'required|alpha',
		'numero_carte' => 'required|size:16|alpha_num',
		'cryptogramme' => 'required|max:255|alpha_num'
		];
    }
}
