<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Condicion;
use Faker\Generator as Faker;

$factory->define(Condicion::class, function (Faker $faker) {

    return [
        //
        'cond_cod'=> 'cd-'.$faker->unique()->numberBetween(0,99),
        'cond_des'=> $faker ->text(50),
    ];
});
