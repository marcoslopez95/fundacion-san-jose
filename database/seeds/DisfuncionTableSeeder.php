<?php

use App\Model\Condicion;
use App\Model\Discapacidad;
use Illuminate\Database\Seeder;

class DisfuncionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Condicion::class,30)->create();
        factory(Discapacidad::class,30)->create();
        
    }
}
