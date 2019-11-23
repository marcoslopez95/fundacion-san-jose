<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    $cod = 'sect-';
    $t = $faker -> randomElement(array('1','2','3'));
    $cod= $cod . "$t";
    return [
        //
        'sect-cod'=> $cod,
        'sect-des'=> $faker ->text(50),
    ];
});
