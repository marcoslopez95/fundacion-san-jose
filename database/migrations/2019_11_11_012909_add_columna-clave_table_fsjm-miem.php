<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnaClaveTableFsjmMiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fsjm_miem', function (Blueprint $table) {
            //
            $table->string('miem_pss',10)->comment('Contraseña del miembro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fsjm_miem', function (Blueprint $table) {
            //
        });
    }
}
