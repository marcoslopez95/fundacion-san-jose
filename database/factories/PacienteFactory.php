<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Paciente;
use App\Model\Representante;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {
    return [
        //
        'paci-rep'=> function () {
            return factory(Representante::class)->create()->repr_ced;
            },
        'paci_ced'=> $faker ->lexify('????????'),
        'paci_no1'=> $faker ->firstName, 
        'paci_no2'=> $faker ->firstname, 
        'paci_no3'=> $faker ->firstname, 
        'paci_ap1'=> $faker ->lastName, 
        'paci_ap2'=> $faker ->lastName, 
        'paci_eda'=> $faker ->numberBetween(1,70), 
        'paci_fna'=> $faker ->date(), 
        'paci_sex'=> $faker ->randomElement(array('m','f')),
        'paci_tel'=> $faker ->lexify('???????????'), 
    ];
});
