<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeySectorTableFsjmRepr extends Migration
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
            $table->foreign('repr-cse')->references('sect-cod')->on('fsjm-sect')->onDelete('cascade');
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
            // $table->dropForeign('fsjm-repr_repr-cse_foreign');
        });
    }
}
