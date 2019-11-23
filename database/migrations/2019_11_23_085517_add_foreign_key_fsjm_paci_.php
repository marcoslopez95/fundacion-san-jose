<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeyFsjmPaci extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('fsjm_paci', function (Blueprint $table) {
            //
            $table->foreign('paci_rep')->references('repr_ced')->on('fsjm_repr')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jfsm_paci', function (Blueprint $table) {
            //
        });
    }
}
