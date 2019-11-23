<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Discapacidad;
use Faker\Generator as Faker;

$factory->define(Discapacidad::class, function (Faker $faker) {
    $cod = 'ds-';
    return [
        //
        'disc_cod'=> $cod . $faker ->rand(0,30),
        'disc_des'=> $faker ->text(50),
    ];
});
