<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\VisitaSocial;
use Faker\Generator as Faker;

$factory->define(VisitaSocial::class, function (Faker $faker) {
    $cod = 'viso-';
    return [
        //
        'viso_cod'=> $cod . $faker ->rand(0,30),
        'viso_apt'=> $faker ->randomElement(array('s','n')),
        'viso_obs'=> $faker ->text(50),
    ];
});
