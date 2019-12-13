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
        Schema::create('fsjt-acdo', function (Blueprint $table) {
            $table->string('acdo-cac',5)->comment('codigo de la actividad');
            $table->string('acdo-cdo',5)->comment('codigo de la donacion entregada en la actividad');

            $table->foreign('acdo-cac')->references('acti-cod')->on('fsjm-acti')->onDelete('cascade');
            $table->foreign('acdo-cdo')->references('dona-cod')->on('fsjm-dona')->onDelete('cascade');
            
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
        Schema::dropIfExists('fsjt-acdo');
    }
}
