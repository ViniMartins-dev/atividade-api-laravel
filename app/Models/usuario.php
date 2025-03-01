<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuario extends Model
{
    protected $fillable = [ // inicia uma array do tipo protegido com as colunas da tabela
        'nome',
        'email',
        'senha',
        'quantidade_filhos',
        'nascimento',
    ];
}
