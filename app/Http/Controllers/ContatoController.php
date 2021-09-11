<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContatoEnviarRequest;
use App\Http\Requests\PassoEnviarRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContatoEmail;
use App\Mail\ContatoPasso;
use Swift_TransportException;
use Illuminate\Support\Facades\DB;
use App\Service\CadastroCreate;
use App\Usuario;


class ContatoController extends Controller
{
	/**
     * Exibe o formulário para enviar uma mensagem
     */
    public function indexContato(){
    	return view('pertence.contato');
    }

    public function indexPasso(){
    	return view('pertence.passo');
    }

	public function enviarContato(ContatoEnviarRequest $request, CadastroCreate $cadastroCreate){

        try{
            
            $check = DB::table('usuarios')->where(['email' => $request->email])->get();

            if(!isset($check[0])){
                $cadastro = $cadastroCreate->createCadastro(
                $request->nome,
                $request->sobrenome,
                $request->telefone,
                $request->email,
                'Para tratamento',
                'Cadastro realizado via contato.',
                '');
            }

            Mail::to('contato@pertence-it.com.br')->send(new ContatoEmail($request));
            return redirect()->route('contato.index')


            ->with('successEmail','E-mail enviado com sucesso! Retornamos em breve.');
        }catch(Swift_TransportException $e){
            return redirect()->route('contato.index')
            ->with('errorEmail','Tivemos um problema, por favor tente mais tarde!');
        }

    }

    public function enviarPasso(PassoEnviarRequest $request, CadastroCreate $cadastroCreate){


        try{

            $check = DB::table('usuarios')->where(['email' => $request->email])->get();
            if(!isset($check[0])){
                $cadastro = $cadastroCreate->createCadastro(
                $request->nome,
                $request->sobrenome,
                $request->telefone,
                $request->email,
                'Para tratamento',
                'Cadastro realizado via primeiro passo.',
                '');
            }

            Mail::to('contato@pertence-it.com.br')->send(new ContatoPasso ($request));
            return redirect()->route('contato.passo')
            ->with('successEmail','E-mail enviado com sucesso! Retornamos em breve.');
        }catch(Swift_TransportException $e){
            return redirect()->route('contato.passo')
            ->with('errorEmail','Tivemos um problema, por favor tente mais tarde!');
        }
    }
}

