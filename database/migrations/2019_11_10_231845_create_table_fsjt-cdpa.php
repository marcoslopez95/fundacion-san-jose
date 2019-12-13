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
        Schema::create('fsjt-cdpa', function (Blueprint $table) {
            $table->string('cdpa-ccd',5)->comment('Codigo de la condición');
            $table->string('cdpa-cpa',8)->comment('Cedula del paciente');

            $table->foreign('cdpa-ccd')->references('cond-cod')->on('fsjm-cond')->onDelete('cascade');
            $table->foreign('cdpa-cpa')->references('paci-ced')->on('fsjm-paci')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt-cdpa');
    }
}
