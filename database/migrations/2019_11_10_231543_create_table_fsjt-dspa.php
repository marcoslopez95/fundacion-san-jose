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
        Schema::create('fsjt-dspa', function (Blueprint $table) {
            $table->string('dspa-cdi',5)->comment('Codigo de la discapacidad');
            $table->string('dspa-cpa',8)->comment('Cedula del paciente');

            $table->foreign('dspa-cdi')->references('disc-cod')->on('fsjm-disc')->onDelete('cascade');
            $table->foreign('dspa-cpa')->references('paci-ced')->on('fsjm-paci')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt-dspa');
    }
}
