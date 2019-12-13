<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnaClaveTableFsjmRepr extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fsjm-repr', function (Blueprint $table) {
            //
            $table->string('repr-pass',10)->comment('Contraseña del representante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fsjm-repr', function (Blueprint $table) {
            //
        });
    }
}
