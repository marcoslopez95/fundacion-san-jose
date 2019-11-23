<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Donacion;
use Faker\Generator as Faker;

$factory->define(Donacion::class, function (Faker $faker) {
    $cod = 'dn-';
    return [
        //
        'dona_cod'=> $cod . $faker ->rand(0,30),
        'dona_des'=> $faker ->text(50),
        'dona_stk'=> $faker ->numberBetween(0,100),
        'dona_prs'=> $faker ->text(50),
    ];
});
