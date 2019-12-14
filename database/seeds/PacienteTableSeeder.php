<?php

use Illuminate\Database\Seeder;
use App\Model\Paciente;
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

    

        factory(Paciente::class,30)->create();
    }
}
