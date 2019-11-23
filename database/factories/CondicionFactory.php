<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Condicion;
use Faker\Generator as Faker;

$factory->define(Condicion::class, function (Faker $faker) {
    $cod = 'cond-';

    return [
        //
        'cond_cod'=>  $cod . $faker ->rand(0,30),
        'cond_des'=> $faker ->text(50),
    ];
});
