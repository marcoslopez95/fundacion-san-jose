<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmViso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm-viso', function (Blueprint $table) {
            $table->string('viso-cod', 5)->primary()->comment('Codigo de la Visita Social');
            $table->char('viso-apt',1)->comment('Apto o no para ayudas sociales (S/N)');
            $table->string('viso-obs',50)->comment('Observaciones en la Visita Social');
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
        Schema::dropIfExists('fsjm-viso');
    }
}
