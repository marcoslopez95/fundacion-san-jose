<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Miembro;
use Faker\Generator as Faker;

$factory->define(Miembro::class, function (Faker $faker) {
    return [
        //
        'miem_ced'=> $faker ->lexify('????????')->unique(),
        'miem_no1'=> $faker ->firstName,
        'miem_no2'=> $faker ->firstname,
        'miem_no3'=> $faker ->firstname,
        'miem_ap1'=> $faker ->lastName,
        'miem_ap2'=> $faker ->lastName,
        'miem_eda'=> $faker ->numberBetween(1,70),
        'miem_fna'=> $faker ->date(),
        'miem_sex'=> $faker ->randomElement(array('m','f')),
        'miem_tel'=> $faker ->lexify('???????????'),
        'miem_cse'=> function () {
            return factory(App\Sector::class)->create()->sect_cod;
            },
        'miem_pss' => bcrypt('hola'),
    ];
});
