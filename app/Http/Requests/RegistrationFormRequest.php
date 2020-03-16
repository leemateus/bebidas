<?php

namespace App\Http\Requests; [Espaço para nome App \\ Http \\ Requests;]

use Illuminate\Foundation\Http\FormRequest; [Use Illuminate \\ Foundation \\ Http \\ FormRequest;]

class RegistrationFormRequest extends FormRequest [Classe RegistrationFormRequest estende FormRequest]
{ [{]
    /** [/ **]
     * Determine if the user is authorized to make this request. [* Determine se o usuário está autorizado a fazer essa solicitação.]
     * [*]
     * @return bool [* @return bool]
 [Return true;]      */ [* /]  [* /]
    public function authorize() [Função pública authorize ()]
    { [{]
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
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6|max:10'
        ];
    }
}
