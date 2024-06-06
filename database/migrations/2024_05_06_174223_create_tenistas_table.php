<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tenistas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->integer('ranking');
            $table->string('pais');
            $table->integer('edad');
            $table->integer('altura');
            $table->integer('peso');
            $table->date('profesionalDesde');
            $table->string('mano');
            $table->string('reves');
            $table->string('entrenador');
            $table->decimal('dineroGanado', 15, 2);
            $table->integer('bestRanking');
            $table->float('winRate');
            $table->string('imagen')->default('default.jpg');
            $table->integer('victorias')->default(0); // Añadido
            $table->integer('derrotas')->default(0); // Añadido
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
        Schema::dropIfExists('tenistas');
    }
}
