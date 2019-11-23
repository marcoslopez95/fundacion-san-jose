<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Representante;
use App\Model\Sector;
use Faker\Generator as Faker;

$factory->define(Representante::class, function (Faker $faker) {
    return [
        //
        'repr_ced'=> $faker->unique()->lexify('?????'),
        'repr_no1'=> $faker->firstName(),
        'repr_no2'=> $faker->firstName(),
        'repr_no3'=> $faker->firstName(),
        'repr_ap1'=> $faker->lastName,
        'repr_ap2'=> $faker->lastName,
        'repr_eda'=> $faker->numberBetween(1,70),
        'repr_fna'=> $faker->date(),
        'repr_sex'=> $faker->randomElement(array('m','f')),
        'repr_tel'=> $faker->lexify('???????????'),
        'repr_cse'=> function () {
            return factory(Sector::class)->create()->sect_cod;
            },
        'repr_pss' => 'hola',
    ];
});
