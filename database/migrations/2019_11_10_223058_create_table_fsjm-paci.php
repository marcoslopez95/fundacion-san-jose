<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmPaci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm_paci', function (Blueprint $table) {
            $table->string('paci_rep',8)->comment('Representante del paciente');
            $table->string('paci_ced',8)->primary()->comment('Cedula del paciente');
            $table->char('paci_no1',15)->comment('Primer nombre del paciente');
            $table->char('paci_no2',15)->comment('Primer nombre del paciente');
            $table->char('paci_no3',15)->comment('Primer nombre del paciente');
            $table->char('paci_ap1',15)->comment('Primer nombre del paciente');
            $table->char('paci_ap2',15)->comment('Primer nombre del paciente');
            $table->integer('paci_eda',false,true)->comment('edad del paciente');
            $table->date('paci_fna')->comment('Fecha de nacimiento del paciente');
            $table->char('paci_sex',1)->comment('Sexo del paciente (F/M)');
            $table->string('paci_tel',11)->comment('Telefono del paciente');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fsjm_paci');
    }
}
