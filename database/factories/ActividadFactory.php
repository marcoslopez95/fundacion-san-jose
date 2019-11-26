<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    $cod = 'ac-';
    return [
        //
        'acti_cod'=> $cod . $faker ->unique()->numberBetween(0,99),
        'acti_des'=> $faker ->text(50),
        'acti_fec'=> $faker ->date(),
    ];
});
