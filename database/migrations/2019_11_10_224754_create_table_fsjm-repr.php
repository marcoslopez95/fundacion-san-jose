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
        Schema::create('fsjm_repr', function (Blueprint $table) {
            $table->string('repr_ced',8)->primary()->comment('Cedula del representante');
            $table->char('repr_no1',15)->comment('Primer nombre del representante');
            $table->char('repr_no2',15)->comment('Primer nombre del representante');
            $table->char('repr_no3',15)->nullable()->comment('Primer nombre del representante');
            $table->char('repr_ap1',15)->comment('Primer nombre del representante');
            $table->char('repr_ap2',15)->comment('Primer nombre del representante');
            $table->integer('repr_eda',false,true)->comment('edad del representante');
            $table->date('repr_fna')->comment('Fecha de nacimiento del representante');
            $table->char('repr_sex',1)->comment('Sexo del representante (F/M)');
            $table->string('repr_tel',11)->comment('Telefono del representante');
            $table->string('repr_cse',5)->comment('Codigo del sector donde vive el representante');
            
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
        Schema::dropIfExists('fsjm_repr');
    }
}
