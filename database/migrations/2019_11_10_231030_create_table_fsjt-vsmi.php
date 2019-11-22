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
        Schema::create('fsjt_vsmi', function (Blueprint $table) {
            $table->string('vsmi_cmi',8)->comment('cedula del miembro que hizo la visita');
            $table->string('vsmi_cre',8)->comment('Cedula del representante a visitar');
            $table->string('vsmi_cvs',5)->comment('codigo de la visita social');
            $table->date('vsmi_fvs')->comment('Fecha de la visita');

            $table->foreign('vsmi_cmi')->references('miem_ced')->on('fsjm_miem')->onDelete('cascade');
            $table->foreign('vsmi_cre')->references('repr_ced')->on('fsjm_repr')->onDelete('cascade');
            $table->foreign('vsmi_cvs')->references('viso_cod')->on('fsjm_viso')->onDelete('cascade');
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
        Schema::dropIfExists('fsjt_vsmi');
    }
}
