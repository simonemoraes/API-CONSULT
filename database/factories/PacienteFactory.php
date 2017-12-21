<?php

use Faker\Generator as Faker;

$factory->define(App\model\Paciente::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'rua' => $faker->rua,
        'bairro' => $faker->bairro,
        'cidade' => $faker->cidade,
        'estado' => $faker->estado,
        'cep' => $faker->cep,
        'numero' => $faker->numero,
        'complemento' => $faker->complemento,
        'dt_nasc' => $faker->dt_nasc,
        'cpf' => $faker->cpf,
        'rg' => $faker->rg,
        'telefone' => $faker->telefone,
        'celular' => $faker->celular,
        'operadora' => $faker->operadora,
        'convenio' => $faker->convenio,
        'num_convenio' => $faker->num_convenio,
        'val_convenio' => $faker->val_convenio,
        'venct_convenio' => $faker->venct_convenio,
        'profissao' => $faker->profissao,
        'empresa' => $faker->empresa,
    ];
});