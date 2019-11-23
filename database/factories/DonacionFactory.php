<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Donacion;
use Faker\Generator as Faker;

$factory->define(Donacion::class, function (Faker $faker) {
    $cod = 'dona-';
    return [
        //
        'dona-cod'=> $cod + $faker ->rand(0,30),
        'dona-des'=> $faker ->text(50),
        'dona-stk'=> $faker ->numberBetween(0,100),
        'dona-prs'=> $faker ->text(50),
    ];
});
