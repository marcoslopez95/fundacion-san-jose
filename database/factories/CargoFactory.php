<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    $cod = 'carg-';

    return [
        //
        'carg_cod'=> $cod . $faker ->rand(0,30),
        'carg_des'=> $faker ->text(50),
    ];
});
