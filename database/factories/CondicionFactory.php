<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Condicion;
use Faker\Generator as Faker;

$factory->define(Condicion::class, function (Faker $faker) {
    return [
        //
        'cond-cod'=> $faker ->lexify('?????'),
        'cond-des'=> $faker ->text(50),
    ];
});
