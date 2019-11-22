<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtSoli extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_soli', function (Blueprint $table) {
            $table->string('soli_cre',8)->comment('cedula del representante');
            $table->string('soli_cpa',8)->comment('cedula del paciente');
            $table->string('soli_cod',5)->primary()->comment('Codigo de la solicitud');
            $table->date('soli_fec')->comment('fecha de la solicitud');

            $table->foreign('soli_cre')->references('repr_ced')->on('fsjm_repr')->onDelete('cascade');
            $table->foreign('soli_cpa')->references('paci_ced')->on('fsjm_paci')->onDelete('cascade');
            
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
        Schema::dropIfExists('fsjt_soli');
    }
}
