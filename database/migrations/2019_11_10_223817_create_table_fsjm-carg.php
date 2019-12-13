<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmCarg extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm-carg', function (Blueprint $table) {
            $table->string('carg-cod',5)->primary()->comment('Codigo del cargo');
            $table->string('carg-des',50)->comment('Descripcion del cargo');
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
        Schema::dropIfExists('fsjm-carg');
    }
}
