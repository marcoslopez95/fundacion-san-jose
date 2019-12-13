<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjtVsmi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjt-vsmi', function (Blueprint $table) {
            $table->string('vsmi-cmi',8)->comment('cedula del miembro que hizo la visita');
            $table->string('vsmi-cre',8)->comment('Cedula del representante a visitar');
            $table->string('vsmi-cvs',5)->comment('codigo de la visita social');
            $table->date('vsmi-fvs')->comment('Fecha de la visita');

            $table->foreign('vsmi-cmi')->references('miem-ced')->on('fsjm-miem')->onDelete('cascade');
            $table->foreign('vsmi-cre')->references('repr-ced')->on('fsjm-repr')->onDelete('cascade');
            $table->foreign('vsmi-cvs')->references('viso-cod')->on('fsjm-viso')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt-vsmi');
    }
}
