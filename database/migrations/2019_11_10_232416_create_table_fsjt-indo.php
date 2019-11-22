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
        Schema::create('fsjt_indo', function (Blueprint $table) {
            $table->string('indo_cin',5)->comment('codigo de la institución');
            $table->string('indo_cdo',5)->comment('codigo de la donación');
            $table->integer('indo_cad',false,true)->comment('Cantidad de la donación');
            $table->date('indo_fec')->comment('fecha de la donación');

            $table->foreign('indo_cin')->references('inst_cod')->on('fsjm_inst')->onDelete('cascade');
            $table->foreign('indo_cdo')->references('dona_cod')->on('fsjm_dona')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt_indo');
    }
}
