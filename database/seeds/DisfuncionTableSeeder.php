<?php

use App\Model\Condicion;
use App\Model\Discapacidad;
use App\Model\Paciente;
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
        factory(Condicion::class,5)->create();

        factory(Discapacidad::class,5)->create();
        
    }
}
