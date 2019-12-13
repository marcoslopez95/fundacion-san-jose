<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmRepr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm-repr', function (Blueprint $table) {
            $table->string('repr-ced',8)->primary()->comment('Cedula del representante');
            $table->char('repr-no1',15)->comment('Primer nombre del representante');
            $table->char('repr-no2',15)->comment('Primer nombre del representante');
            $table->char('repr-no3',15)->comment('Primer nombre del representante');
            $table->char('repr-ap1',15)->comment('Primer nombre del representante');
            $table->char('repr-ap2',15)->comment('Primer nombre del representante');
            $table->integer('repr-eda',false,true)->comment('edad del representante');
            $table->date('repr-fna')->comment('Fecha de nacimiento del representante');
            $table->char('repr-sex',1)->comment('Sexo del representante (F/M)');
            $table->string('repr-tel',11)->comment('Telefono del representante');
            $table->string('repr-cse',5)->comment('Codigo del sector donde vive el representante');
            
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
        Schema::dropIfExists('fsjm-repr');
    }
}
