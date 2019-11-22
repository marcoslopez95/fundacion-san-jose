<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySectorTableFsjmMiem extends Migration
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
            $table->foreign('miem_cse')->references('sect_cod')->on('fsjm_sect')->onDelete('cascade');
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
