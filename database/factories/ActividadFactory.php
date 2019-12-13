<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Actividad;
use Faker\Generator as Faker;

$factory->define(Actividad::class, function (Faker $faker) {
    return [
        //
        'acti-cod'=> $faker ->lexify('?????'),
        'acti-des'=> $faker ->text(50),
        'acti-fec'=> $faker ->date(),
    ];
});
