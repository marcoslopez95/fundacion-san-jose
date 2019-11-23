<?php

use App\Model\Representante;
use Illuminate\Database\Seeder;

class RepresentanteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Representante::class,14)->create();
        factory(Donacion::class,15)->create();
    }
}
