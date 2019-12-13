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
        Schema::create('fsjt-sodo', function (Blueprint $table) {
            $table->string('sodo-cso',5)->comment('codigo de la solicitud');
            $table->string('sodo-cdo',5)->comment('codigo de la donación');
            $table->integer('sodo-cnd',false,true)->comment('Cantidad de unidades de donación');

            $table->foreign('sodo-cso')->references('soli-cod')->on('fsjt-soli');
            $table->foreign('sodo-cdo')->references('dona-cod')->on('fsjm-dona');
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
        Schema::dropIfExists('fsjt-sodo');
    }
}
