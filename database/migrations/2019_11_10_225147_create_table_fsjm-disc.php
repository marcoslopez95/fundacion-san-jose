<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFsjmDisc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fsjm-disc', function (Blueprint $table) {
            $table->string('disc-cod', 5)->primary()->comment('Codigo de la discapacidad');
            $table->string('disc-des', 50)->comment('descripción de la discapacidad');
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
        Schema::dropIfExists('fsjm-disc');
    }
}
