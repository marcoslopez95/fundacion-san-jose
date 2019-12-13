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
        Schema::table('fsjm-miem', function (Blueprint $table) {
            //
            $table->foreign('miem-cse')->references('sect-cod')->on('fsjm-sect')->onDelete('cascade');
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
