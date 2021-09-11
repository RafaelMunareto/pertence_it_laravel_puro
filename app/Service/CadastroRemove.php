<?php

namespace App\Service;

use App\Historico;
use App\historico as AppHistorico;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class CadastroRemove {

    public function removeCadastro(Int $usuario_id): string
    {

        $nome = '';
        DB::transaction( function () use ($usuario_id, &$nome){
            $usuario = Usuario::find($usuario_id);
            $nome = $usuario->nome . " " .  $usuario->sobrenome;
            $this->removeHistoricoJunto($usuario);
            $usuario->delete();
        });

        return $nome;
    }

    public function removeHistoricoJunto(Usuario $usuario): void
    {

            $usuario->historicos()->each(function(Historico $historico){
                $historico->delete();
            });


    }

    public function removerHistorico($id): String
    {
        DB::beginTransaction();
            $historico = Historico::find($id);
            $nome = $historico->nome . " " .  $historico->sobrenome;
            $historico->delete();
        DB::commit();

        return $nome;

    }
}
