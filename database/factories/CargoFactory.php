<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    $cod = 'carg-';

    return [
        //
        'carg-cod'=> $cod + $faker ->rand(0,30),
        'carg-des'=> $faker ->text(50),
    ];
});
