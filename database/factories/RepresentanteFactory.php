<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Representante;
use Faker\Generator as Faker;

$factory->define(Representante::class, function (Faker $faker) {
    return [
        //
        'repr-ced'=> $faker ->lexify('?????'),
        'repr-no1'=> $faker ->firstName(),
        'repr-no2'=> $faker ->firstName(),
        'repr-no3'=> $faker ->firstName(),
        'repr-ap1'=> $faker ->lastName,
        'repr-ap2'=> $faker ->lastName,
        'repr-eda'=> $faker ->numberBetween(1,70),
        'repr-fna'=> $faker ->date(),
        'repr-sex'=> $faker ->randomElement(array('m','f')),
        'repr-tel'=> $faker ->lexify('???????????'),
        'repr-cse'=> $faker ->lexify('?????'),
    ];
});
