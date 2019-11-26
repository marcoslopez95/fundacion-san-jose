<?php

use App\Model\Institucion;
use Illuminate\Database\Seeder;
use App\Model\Paciente;
use App\Model\Miembro;
use App\Model\Donacion;
use App\Model\VisitaSocial;
use App\Model\Cargo;
use App\Model\Actividad;
class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

    

        factory(Paciente::class,5)->create();
        factory(Miembro::class,5)->create();
        factory(VisitaSocial::class,5)->create();
        factory(Institucion::class,5)->create();
        factory(Cargo::class,5)->create();
        factory(Actividad::class,5)->create();
        factory(Donacion::class,5)->create();
    }
}
