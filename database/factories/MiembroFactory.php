<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Miembro;
use App\Model\Sector;
use Faker\Generator as Faker;

$factory->define(Miembro::class, function (Faker $faker) {
    $u = function(){
        // $pokemons = Pokemon::all();
        $a = Sector::all();
        return response()->json($a,200);
    };
    $j = json_decode($u->sect_cod);
    return [
        //
        'miem_ced'=> $faker->unique() ->lexify('????????'),
        'miem_no1'=> $faker->firstName,
        'miem_no2'=> $faker->firstname,
        'miem_no3'=> $faker->firstname,
        'miem_ap1'=> $faker->lastName,
        'miem_ap2'=> $faker->lastName,
        'miem_eda'=> $faker->numberBetween(1,70),
        'miem_fna'=> $faker->date(),
        'miem_sex'=> $faker->randomElement(array('m','f')),
        'miem_tel'=> $faker->lexify('???????????'),
        'miem_cse'=> $faker->randomElement(array ($u)),
        'miem_pss' => 'hola',
    ];
});
