<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    return [
        //
        'sect-cod'=> $faker ->lexify('?????'),
        'sect-des'=> $faker ->text(50),
    ];
});
