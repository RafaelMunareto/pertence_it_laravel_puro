<?php

namespace App\Http\Controllers;

use App\Historico;
use App\Service\CadastroCreate;
use App\Service\CadastroRemove;
use App\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoricoController extends Controller
{

    public function index(Request $request, int $id){
        $cadastro = Usuario::find($id);

        return view('administracao.incluiHistorico', compact('id', 'cadastro'));
    }


    public function historico(Request $request, int $id){

        $cadastro = Usuario::find($id)->historicos->sortByDesc('id');;
        $usuario = Usuario::find($id);
        return view('administracao.historico', compact('cadastro', 'usuario'));
    }


    public function store(Request $request, CadastroCreate $cadastroCreate, int $id)
    {

        $usuario = Usuario::find($id);

        $cadastro = $cadastroCreate->createHistorico(
            $request->usuario_id,
            $request->historico,
            $request->nome,
            $request->sobrenome,
            $usuario->email
        );

        return redirect()->route('historico', ['id' =>$id])
        ->with('cadastroOK','Histórico ' . $cadastro->nome . " " . $cadastro->sobrenome . '  incluído com sucesso!');

    }

    public function destroy(Request $request, CadastroRemove $cadastroRemove){

        $nome = $cadastroRemove->removerHistorico($request->id);

        return redirect()->route('admin')
        ->with('exclusao','Histórico do cliente ' . $nome . " " . ' excluído com sucesso!');
    }

    public function altera(Int $id, Request $request){

        $novoHistorico = $request->historico;

        $historico = Historico::find($id);
        $historico->historico = $novoHistorico;
        $historico->save();

        return redirect()->route('admin')
        ->with('cadastroOK','Historico ' . $request->nome . " " . $request->sobrenome . '  alterado com sucesso!');


    }

}
