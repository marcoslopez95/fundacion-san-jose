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
        Schema::create('fsjm-dona', function (Blueprint $table) {
            $table->string('dona-cod',5)->primary()->comment('Código de la donación');
            $table->string('dona-des',50)->comment('descripcion de la donacion');
            $table->integer('dona-stk',false,true)->comment('stock de la donación');
            $table->string('dona-prs',50)->comment('Presentación de la donación');
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
        Schema::dropIfExists('fsjm-dona');
    }
}
