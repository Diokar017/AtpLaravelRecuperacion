<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneoTenistaTable extends Migration
{
    public function up()
    {
        Schema::create('torneo_tenista', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('torneo_id');
            $table->unsignedBigInteger('tenista_id');
            $table->timestamps();

            $table->foreign('torneo_id')->references('id')->on('torneos')->onDelete('cascade');
            $table->foreign('tenista_id')->references('id')->on('tenistas')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('torneo_tenista');
    }
}
