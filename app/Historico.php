<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Historico extends Model
{
    protected $fillable = [
        'historico',
        'usuario_id',
        'nome',
        'sobrenome',
        'email'
    ];

    public function usuario(){
        return $this->belongsTo(Usuario::class);
    }
}
