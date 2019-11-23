<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    $cod = 'acti-';
    return [
        //
        'acti-cod'=> $cod + $faker ->rand(0,30),
        'acti-des'=> $faker ->text(50),
        'acti-fec'=> $faker ->date(),
    ];
});
