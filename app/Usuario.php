<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Usuario extends Model{


    public $timestamps = false;
    protected $fillable = [
        'nome',
        'sobrenome',
        'telefone',
        'email',
        'fase',
        'obs',
        'historico'
    ];


    public function historicos(){

        return $this->hasMany(Historico::class);
    }
}
