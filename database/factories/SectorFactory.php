<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Sector;
use Faker\Generator as Faker;

$factory->define(Sector::class, function (Faker $faker) {
    $cod = 'sc-';
    
    return [
        //
        'sect_cod'=> $faker->unique()->lexify('?????'),
        'sect_des'=> $faker->text(50),
    ];
});
