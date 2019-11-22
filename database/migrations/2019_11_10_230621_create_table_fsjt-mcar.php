<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtMcar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt_mcar', function (Blueprint $table) {
            $table->string('mcar_cca',5)->comment('codigo del cargo');
            $table->string('mcar_cmi',8)->comment('Cedula del miembro');
            $table->foreign('mcar_cca')->references('carg_cod')->on('fsjm_carg')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mcar_cmi')->references('miem_ced')->on('fsjm_miem')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fsjt_mcar');
    }
}
