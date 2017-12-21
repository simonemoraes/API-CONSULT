<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{

    protected $fillable = [
        'nome' ,
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
        'venct_convenio',
        'profissao',
        'empresa',
    ];
 /*
    public function listar(){
        $paciente = [
            (object)["nome"=>"Simone", "telefone"=>"987404766"],
            (object)["nome"=>"Vitor", "telefone"=>"123456789"]
        ];

        return $paciente;
    }
*/
}
