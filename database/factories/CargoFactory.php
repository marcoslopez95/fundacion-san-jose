<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    $cod = 'cg-';

    return [
        //
        'carg_cod'=> $cod . $faker ->unique()->numberBetween(0,99),
        'carg_des'=> $faker ->text(50),
    ];
});
