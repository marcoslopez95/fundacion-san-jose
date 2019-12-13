<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtIndo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt-indo', function (Blueprint $table) {
            $table->string('indo-cin',5)->comment('codigo de la institución');
            $table->string('indo-cdo',5)->comment('codigo de la donación');
            $table->integer('indo-cad',false,true)->comment('Cantidad de la donación');
            $table->date('indo-fec')->comment('fecha de la donación');

            $table->foreign('indo-cin')->references('inst-cod')->on('fsjm-inst')->onDelete('cascade');
            $table->foreign('indo-cdo')->references('dona-cod')->on('fsjm-dona')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt-indo');
    }
}
