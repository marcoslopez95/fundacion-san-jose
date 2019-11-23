<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Discapacidad;
use Faker\Generator as Faker;

$factory->define(Discapacidad::class, function (Faker $faker) {
    $cod = 'dis-';
    return [
        //
        'disc-cod'=> $cod + $faker ->rand(0,30),
        'disc-des'=> $faker ->text(50),
    ];
});
