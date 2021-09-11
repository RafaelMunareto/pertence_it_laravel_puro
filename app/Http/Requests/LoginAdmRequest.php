<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginAdmRequest extends FormRequest
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
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'min:6'],
            'attributes' => [
                'email' => 'email',
                'name' => 'nome',
                'password' => 'senha'
            ]
        ];

    }

    public function messages()
    {
        return [
            'require' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute aceita somente letras.',
            'email' => 'O campo :attribute deve ser um email',
            'max' => 'O campo :attribute aceita no máximo 255 caracteres',
            'min' => 'O campo :attribute deve conter no mínimo 6 caracteres.',
        ];
    }
}
