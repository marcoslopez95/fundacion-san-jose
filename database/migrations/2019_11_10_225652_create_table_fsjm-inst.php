<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmInst extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm_inst', function (Blueprint $table) {
            $table->string('inst_cod',5)->primary()->comment('Codigo de la institución');
            $table->string('inst_nom',50)->comment('Nombre de la institución');
            $table->char('inst_dep',1)->comment('dependencia: nacional(n), estadal (e), municipal (m), privado (p)');
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
        Schema::dropIfExists('fsjm_inst');
    }
}
