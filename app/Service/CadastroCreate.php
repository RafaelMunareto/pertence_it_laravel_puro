<?php

namespace App\Service;

use App\Historico;
use App\Usuario;
use Illuminate\Support\Facades\DB;

class CadastroCreate {

    public function createCadastro(
        string $nome,
        string $sobrenome,
        string $telefone,
        string $email,
        string $fase,
        string $obs,
        string $historico
    ):Usuario
    {

        $cadastro = Usuario::create([
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'telefone' => $telefone,
                'email' => $email,
                'fase' => $fase,
                'obs'=> $obs
        ]);
        DB::beginTransaction();
            $cadastro->historicos()->create([
                'historico' => $historico,
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email
            ]);
        DB::commit();

        return $cadastro;
    }

    public function createHistorico(
        int $usuario_id,
        string $historico,
        string $nome,
        string $sobrenome,
        string $email): Historico
    {
        DB::beginTransaction();
            $cadastro = Historico::create([
                'usuario_id' => $usuario_id,
                'historico' => $historico,
                'nome' => $nome,
                'sobrenome' => $sobrenome,
                'email' => $email
            ]);
        DB::commit();

        return $cadastro;
    }
}
