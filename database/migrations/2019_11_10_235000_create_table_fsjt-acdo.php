<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtAcdo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_acdo', function (Blueprint $table) {
            $table->string('acdo_cac',5)->comment('codigo de la actividad');
            $table->string('acdo_cdo',5)->comment('codigo de la donacion entregada en la actividad');

            $table->foreign('acdo_cac')->references('acti_cod')->on('fsjm_acti')->onDelete('cascade');
            $table->foreign('acdo_cdo')->references('dona_cod')->on('fsjm_dona')->onDelete('cascade');
            
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
        Schema::dropIfExists('fsjt_acdo');
    }
}
