<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtCdpa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_cdpa', function (Blueprint $table) {
            $table->string('cdpa_ccd',5)->comment('Codigo de la condición');
            $table->string('cdpa_cpa',8)->comment('Cedula del paciente');

            $table->foreign('cdpa_ccd')->references('cond_cod')->on('fsjm_cond')->onDelete('cascade');
            $table->foreign('cdpa_cpa')->references('paci_ced')->on('fsjm_paci')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt_cdpa');
    }
}
