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
        Schema::create('fsjt-mcar', function (Blueprint $table) {
            $table->string('mcar-cca',5)->comment('codigo del cargo');
            $table->string('mcar-cmi',8)->comment('Cedula del miembro');
            $table->foreign('mcar-cca')->references('carg-cod')->on('fsjm-carg')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('mcar-cmi')->references('miem-ced')->on('fsjm-miem')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('fsjt-mcar');
    }
}
