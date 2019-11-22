<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtAcse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_acse', function (Blueprint $table) {
            $table->string('acse_cac',5)->comment('codigo de la actividad');
            $table->string('acse_cse',5)->comment('codigo del sector atendido por la actividad');
            $table->foreign('acse_cse')->references('sect_cod')->on('fsjm_sect')->onDelete('cascade');
            $table->foreign('acse_cac')->references('acti_cod')->on('fsjm_acti')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt_acse');
    }
}
