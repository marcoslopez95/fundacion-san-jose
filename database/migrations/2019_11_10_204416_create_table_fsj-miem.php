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
        Schema::create('fsjm-miem', function (Blueprint $table) {
            $table->string('miem-ced',8)->primary()->comment('Cedula del miembro');
            $table->char('miem-no1',15)->comment('Primer nombre del miembro');
            $table->char('miem-no2',15)->comment('Primer nombre del miembro');
            $table->char('miem-no3',15)->comment('Primer nombre del miembro');
            $table->char('miem-ap1',15)->comment('Primer nombre del miembro');
            $table->char('miem-ap2',15)->comment('Primer nombre del miembro');
            $table->integer('miem-eda',false,true)->comment('edad del miembro');
            $table->date('miem-fna')->comment('Fecha de nacimiento del miembro');
            $table->char('miem-sex',1)->comment('Sexo del miembro (F/M)');
            $table->string('miem-tel',11)->comment('Telefono del miembro');
            $table->string('miem-cse',5)->comment('Codigo del sector donde vive el miembro');
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
        Schema::dropIfExists('fsjm-miem');
    }
}
