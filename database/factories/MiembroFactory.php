<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Miembro;
use Faker\Generator as Faker;

$factory->define(Miembro::class, function (Faker $faker) {
    return [
        //
        'miem-ced'=> $faker ->lexify('????????')->unique(),
        'miem-no1'=> $faker ->firstName,
        'miem-no2'=> $faker ->firstname,
        'miem-no3'=> $faker ->firstname,
        'miem-ap1'=> $faker ->lastName,
        'miem-ap2'=> $faker ->lastName,
        'miem-eda'=> $faker ->numberBetween(1,70),
        'miem-fna'=> $faker ->date(),
        'miem-sex'=> $faker ->randomElement(array('m','f')),
        'miem-tel'=> $faker ->lexify('???????????'),
        'miem-cse'=> $faker ->lexify('?????'),
    ];
});
