<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Discapacidad;
use Faker\Generator as Faker;

$factory->define(Discapacidad::class, function (Faker $faker) {
    return [
        //
        'disc-cod'=> $faker ->lexify('?????'),
        'disc-des'=> $faker ->text(50),
    ];
});
