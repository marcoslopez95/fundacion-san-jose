<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmActi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm_acti', function (Blueprint $table) {
            $table->string('acti_cod',5)->primary()->comment('codigo de la actividad');
            $table->string('acti_des',50)->comment('descripcion de la actividad');
            $table->date('acti_fec')->comment('fecha de la actividad');
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
        Schema::dropIfExists('fsjm_acti');
    }
}
