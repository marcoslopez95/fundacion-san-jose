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
        Schema::create('fsjm-paci', function (Blueprint $table) {
            $table->string('paci-rep',8)->comment('Representante del paciente');
            $table->string('paci-ced',8)->primary()->comment('Cedula del paciente');
            $table->char('paci-no1',15)->comment('Primer nombre del paciente');
            $table->char('paci-no2',15)->comment('Primer nombre del paciente');
            $table->char('paci-no3',15)->comment('Primer nombre del paciente');
            $table->char('paci-ap1',15)->comment('Primer nombre del paciente');
            $table->char('paci-ap2',15)->comment('Primer nombre del paciente');
            $table->integer('paci-eda',false,true)->comment('edad del paciente');
            $table->date('paci-fna')->comment('Fecha de nacimiento del paciente');
            $table->char('paci-sex',1)->comment('Sexo del paciente (F/M)');
            $table->string('paci-tel',11)->comment('Telefono del paciente');
            
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
        Schema::dropIfExists('fsjm-paci');
    }
}
