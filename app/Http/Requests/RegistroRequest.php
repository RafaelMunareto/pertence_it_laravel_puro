<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|unique:email',
            'password' => 'required| min:6|',
            'passwordConfirma' => 'required|same:password'
        ];

    }

    public function messages()
    {
        return [
            'name.required' => 'O campo nome é obrigatório.',
            'email.required' => 'O campo email é obrigatório.',
            'email.unique' => 'Cliente já cadastrado.',
            'password.required' => 'A senha é obrigatória e deve conter no mínimo 6 digitos.',
            'passwordConfirma.required' => 'A confirmaçao da senha é obrigatória e deve ser igual a senha.',
            'same' => 'As senha e a confirmaçao devem ser iguais',
            'password.min' => 'A senha deve conter 6 caracteres.'
        ];
    }
}
