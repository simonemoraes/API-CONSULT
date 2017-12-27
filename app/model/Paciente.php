<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = [
        'nome',
        'email',
        'rua',
        'bairro',
        'cidade',
        'estado',
        'cep',
        'numero',
        'complemento',
        'dt_nasc',
        'cpf',
        'rg',
        'telefone',
        'celular',
        'operadora',
        'convenio',
        'num_convenio',
        'val_convenio',
        'via_convenio',
        'profissao',
        'empresa'
    ];
}
