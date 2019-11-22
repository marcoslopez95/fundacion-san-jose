<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmDona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm_dona', function (Blueprint $table) {
            $table->string('dona_cod',5)->primary()->comment('Código de la donación');
            $table->string('dona_des',50)->comment('descripcion de la donacion');
            $table->integer('dona_stk',false,true)->comment('stock de la donación');
            $table->string('dona_prs',50)->comment('Presentación de la donación');
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
        Schema::dropIfExists('fsjm_dona');
    }
}
