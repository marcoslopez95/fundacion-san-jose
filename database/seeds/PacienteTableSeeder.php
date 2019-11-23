<?php

use Illuminate\Database\Seeder;
use App\Model\Paciente;
use App\Model\Miembro;
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
    }
}
