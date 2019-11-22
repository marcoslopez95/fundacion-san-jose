<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtSodo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_sodo', function (Blueprint $table) {
            $table->string('sodo_cso',5)->comment('codigo de la solicitud');
            $table->string('sodo_cdo',5)->comment('codigo de la donación');
            $table->integer('sodo_cnd',false,true)->comment('Cantidad de unidades de donación');

            $table->foreign('sodo_cso')->references('soli_cod')->on('fsjt_soli');
            $table->foreign('sodo_cdo')->references('dona_cod')->on('fsjm_dona');
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
        Schema::dropIfExists('fsjt_sodo');
    }
}
