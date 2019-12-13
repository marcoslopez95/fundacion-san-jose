<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\VisitaSocial;
use Faker\Generator as Faker;

$factory->define(VisitaSocial::class, function (Faker $faker) {
    return [
        //
        'viso-cod'=> $faker ->lexify('?????'),
        'viso-apt'=> $faker ->randomElement(array('s','n')),
        'viso-obs'=> $faker ->text(50),
    ];
});
