<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PassoEnviarRequest extends FormRequest
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
                'nome' => 'required|min:3',
                'sobrenome' => 'required|min:3',
                'telefone' => 'required|min:3',
                'regiao' => 'required|min:3',
                'descendencia' => 'required|min:3',
                'certidao' => 'required|min:3',
                'antenato' => 'required|min:3',
            ];

    }
}
