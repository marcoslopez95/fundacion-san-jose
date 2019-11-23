<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Institucion;
use Faker\Generator as Faker;

$factory->define(Institucion::class, function (Faker $faker) {
    $cod = 'ins-';
    return [
        //
        'inst_cod'=> $cod . $faker ->rand(0,30),
        'inst_nom'=> $faker ->company,
        'inst_dep'=> $faker ->randomElement(array('n','e','m','p')),
    ];
});
