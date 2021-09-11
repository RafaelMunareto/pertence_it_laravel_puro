<?php

namespace App\Http\Controllers;


use App\Service\CadastroCreate;
use App\Service\CadastroRemove;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;


use function GuzzleHttp\Promise\all;

class CadastroController extends Controller
{

    public function index(){

    	return view('administracao.cadastro');
    }


    public function store(Request $request, CadastroCreate $cadastroCreate){

        $check = DB::table('usuarios')->where(['email' => $request->email])->get();

        if(!isset($check[0])){
                $cadastro = $cadastroCreate->createCadastro(
                $request->nome,
                $request->sobrenome,
                $request->telefone,
                $request->email,
                $request->fase,
                $request->obs,
                $request->historico
            );

            return redirect()->route('admin')
            ->with('cadastroOK','Cliente ' . $cadastro->nome . " " . $cadastro->sobrenome . '  e seu histórico cadastrado com sucesso!');
        }else{
            return redirect()->route('admin')
            ->with('error','Cliente já cadastrado!');

        }
    }

    public function destroy(Request $request, CadastroRemove $cadastroRemove){

        $nome = $cadastroRemove->removeCadastro($request->id);

        return redirect()->route('admin')
        ->with('exclusao','Cliente ' . $nome . " " . ' excluído com sucesso!');

    }

    public function Cadastroaltera(Request $request, int $id){

        $usuario = Usuario::find($id);

        return view('administracao.alteraCadastro', compact('usuario'));

    }

    public function clientePropriedades(Request $request, int $id){

        $usuario = Usuario::find($id);

        return view('administracao.clientePropriedades', compact('usuario'));

    }


    public function altera(Int $id, Request $request){

        $novoNome = $request->nome;
        $novoSobrenome = $request->sobrenome;
        $novoEmail = $request->email;
        $novoTelefone = $request->telefone;
        $novoFase = $request->fase;
        $novoObs = $request->obs;

        $usuario = Usuario::find($id);
        $usuario->nome = $novoNome;
        $usuario->sobrenome = $novoSobrenome;
        $usuario->email = $novoEmail;
        $usuario->telefone = $novoTelefone;
        $usuario->fase = $novoFase;
        $usuario->obs = $novoObs;
        $usuario->save();

        return redirect()->route('admin')
        ->with('cadastroOK','Cliente ' . $usuario->nome . " " . $usuario->sobrenome . '  alterado com sucesso!');
    }



}
