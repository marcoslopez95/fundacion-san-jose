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
        Schema::create('fsjt-acse', function (Blueprint $table) {
            $table->string('acse-cac',5)->comment('codigo de la actividad');
            $table->string('acse-cse',5)->comment('codigo del sector atendido por la actividad');
            $table->foreign('acse-cse')->references('sect-cod')->on('fsjm-sect')->onDelete('cascade');
            $table->foreign('acse-cac')->references('acti-cod')->on('fsjm-acti')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt-acse');
    }
}
