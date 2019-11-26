<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjMiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm_miem', function (Blueprint $table) {
            $table->string('miem_ced',8)->primary()->comment('Cedula del miembro');
            $table->char('miem_no1',15)->comment('Primer nombre del miembro');
            $table->char('miem_no2',15)->comment('Primer nombre del miembro');
            $table->char('miem_no3',15)->nullable()->comment('Primer nombre del miembro');
            $table->char('miem_ap1',15)->comment('Primer nombre del miembro');
            $table->char('miem_ap2',15)->comment('Primer nombre del miembro');
            $table->integer('miem_eda',false,true)->comment('edad del miembro');
            $table->date('miem_fna')->comment('Fecha de nacimiento del miembro');
            $table->char('miem_sex',1)->comment('Sexo del miembro (F/M)');
            $table->string('miem_tel',11)->comment('Telefono del miembro');
            $table->string('miem_cse',5)->comment('Codigo del sector donde vive el miembro');
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
        Schema::dropIfExists('fsjm_miem');
    }
}
