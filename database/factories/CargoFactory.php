<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Cargo;
use Faker\Generator as Faker;

$factory->define(Cargo::class, function (Faker $faker) {
    return [
        //
        'carg-cod'=> $faker ->lexify('?????'),
        'carg-des'=> $faker ->text(50),
    ];
});
