<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTorneosTable extends Migration
{
    public function up()
    {
        Schema::create('torneos', function (Blueprint $table) {
            $table->id();
            $table->string('ubicacion');
            $table->enum('modo', ['individual', 'parejas']);
            $table->enum('categoria', ['solo', 'parejas']);
            $table->enum('superficie', ['tierra_batida', 'hierba', 'pista_dura', 'moqueta']);
            $table->integer('entradas');
            $table->decimal('premio', 10, 2);
            $table->date('fechaInicio');
            $table->date('fechaFinalizacion');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('torneos');
    }
}
