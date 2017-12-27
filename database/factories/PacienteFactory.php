<?php

use Faker\Generator as Faker;

$factory->define(App\model\Paciente::class, function (Faker $faker) {

    $faker->locale('pt-br');

    return [
        'nome' =>$faker->name,
        'email'=>$faker->email,
        'rua' =>$faker->asciify($string = ''),
        'bairro' =>$faker->citySuffix,
        'cidade' => $faker->city,
        'estado' => $faker->country,
        'cep' => $faker->numerify('xx.xxx-xxx'),
        'numero' => $faker->numerify(),
        'complemento' => $faker->numerify(),
        'dt_nasc' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'cpf' => $faker->numerify('xxxxxxxxxxx'),
        'rg' => $faker->numerify('xxxxxxxxx'),
        'telefone' => $faker->numerify('(xx)xxxxx-xxxx'),
        'celular' => $faker->numerify('(xx)xxxxx-xxxx'),
        'operadora' => $faker->asciify($string = 'operadora'),
        'convenio' => $faker->asciify($string = 'convenio'),
        'num_convenio' => $faker->numerify('xxxxxxxxxxx'),
        'val_convenio' => $faker->date($format = 'd-m-Y', $max = 'now'),
        'via_convenio' => $faker->numerify('xx'),
        'profissao' => $faker->jobTitle,
        'empresa' => $faker->company
    ];
});