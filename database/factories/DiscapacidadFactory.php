<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Discapacidad;
use Faker\Generator as Faker;

$factory->define(Discapacidad::class, function (Faker $faker) {
    
    return [
        //
        'disc_cod'=> 'ds-'.$faker->unique()->numberBetween(0,99),
        'disc_des'=> $faker ->text(50),
    ];
});
