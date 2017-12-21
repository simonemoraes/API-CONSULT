<?php

use Illuminate\Database\Seeder;
use App\model\Paciente;

class PacientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {       

        factory(\App\model\Paciente::class,5)
        ->create()
        ->each(function ($paciente){

            $model = \App\model\Paciente::create([
                'nome' => $paciente->nome,
                'rua' => $paciente->rua,
                'bairro' => $paciente->bairro,
                'cidade' => $paciente->cidade,
                'estado' => $paciente->estado,
                'cep' => $paciente->cep,
                'numero' => $paciente->complemento,
                'dt_nasc' => $paciente->dt_nasc,
                'cpf' => $paciente->cpf,
                'rg' => $paciente->rg,
                'telefone' => $paciente->telefone,
                'celular' => $paciente->celular,
                'operadora' => $paciente->operadora,
                'convenio' => $paciente->convenio,
                'num_convenio' => $paciente->num_convenio,
                'val_convenio' => $paciente->val_convenio,
                'via' => $paciente->via,
                'profissao' => $paciente->profissao,
                'empresa' => $paciente->empresa,
            ]);

            $paciente->save();
            $model->save();

        });
    }
}
