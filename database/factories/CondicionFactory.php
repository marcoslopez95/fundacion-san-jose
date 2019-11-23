<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Condicion;
use Faker\Generator as Faker;

$factory->define(Condicion::class, function (Faker $faker) {
    $cod = 'cond-';

    return [
        //
        'cond-cod'=>  $cod + $faker ->rand(0,30),
        'cond-des'=> $faker ->text(50),
    ];
});
