<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        //
        'paci-rep'=> $faker ->numberBetween(0,30), 
        'paci-ced'=> $faker ->lexify('????????'),
        'paci-no1'=> $faker ->firstName, 
        'paci-no2'=> $faker ->firstname, 
        'paci-no3'=> $faker ->firstname, 
        'paci-ap1'=> $faker ->lastName, 
        'paci-ap2'=> $faker ->lastName, 
        'paci-eda'=> $faker ->numberBetween(1,70), 
        'paci-fna'=> $faker ->date(), 
        'paci-sex'=> $faker ->randomElement(array('m','f')),
        'paci-tel'=> $faker ->lexify('???????????'), 
    ];
});
