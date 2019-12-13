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
        Schema::create('fsjt-soli', function (Blueprint $table) {
            $table->string('soli-cre',8)->comment('cedula del representante');
            $table->string('soli-cpa',8)->comment('cedula del paciente');
            $table->string('soli-cod',5)->primary()->comment('Codigo de la solicitud');
            $table->date('soli-fec')->comment('fecha de la solicitud');

            $table->foreign('soli-cre')->references('repr-ced')->on('fsjm-repr')->onDelete('cascade');
            $table->foreign('soli-cpa')->references('paci-ced')->on('fsjm-paci')->onDelete('cascade');
            
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
        Schema::dropIfExists('fsjt-soli');
    }
}
