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
        Schema::table('fsjm-miem', function (Blueprint $table) {
            //
            $table->string('miem-pass',10)->comment('Contraseña del miembro');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('fsjm-miem', function (Blueprint $table) {
            //
        });
    }
}
