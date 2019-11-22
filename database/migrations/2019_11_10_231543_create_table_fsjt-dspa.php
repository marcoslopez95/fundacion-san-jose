<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtDspa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_dspa', function (Blueprint $table) {
            $table->string('dspa_cdi',5)->comment('Codigo de la discapacidad');
            $table->string('dspa_cpa',8)->comment('Cedula del paciente');

            $table->foreign('dspa_cdi')->references('disc_cod')->on('fsjm_disc')->onDelete('cascade');
            $table->foreign('dspa_cpa')->references('paci_ced')->on('fsjm_paci')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt_dspa');
    }
}
