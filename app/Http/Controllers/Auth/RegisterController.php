<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\Usuario;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {

        $messages = [
            'require' => 'O campo :attribute é obrigatório.',
            'string' => 'O campo :attribute aceita somente letras.',
            'email' => 'O campo :attribute deve ser um email',
            'max' => 'O campo :attribute aceita no máximo 255 caracteres',
            'unique' => 'Você já é registrado clique em "esqueceu a senha?" na aba login.',
            'min' => 'O campo :attribute deve conter no mínimo 6 caracteres.',
            'confirmed' => 'As senhas devem ser iguais'
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
            'attributes' => [
                'email' => 'email',
                'name' => 'nome',
                'password' => 'senha'
            ]
        ], $messages);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {

        $check = DB::table('usuarios')->where(['email' => $data['email']])->get();

        if(!isset($check[0])){

            $cadastro = Usuario::create([
                'nome' => $data['name'],
                'sobrenome' => $data['sobrenome'],
                'email' => $data['email'],
                'telefone' => $data['telefone'],
                'fase' => 'Para tratamento',
                'obs' => 'Usuário cadastrado no login.'
            ]);
            $cadastro->historicos()->create([
                'nome' => $data['name'],
                'sobrenome' => $data['sobrenome'],
                'email' => $data['email'],
                'historico' => '',
                'updated_at' => ''
            ]);
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
