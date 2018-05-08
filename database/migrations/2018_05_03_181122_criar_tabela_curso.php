<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaCurso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso', function (Blueprint $table) {
            $table->increments('id');
            $table->string('t_curso',200);
            $table->string('modalidade',200);
            $table->string('denominacao_curso',200);
            $table->string('habilitacao',200);
            $table->string('local_oferta',200);
            $table->string('turno_func',200);
            $table->string('num_vagas',200);
            $table->integer('carga_h_curso');
            $table->string('regime_letivo',200);
            $table->string('periodo',200);
            $table->string('coord_curso',200);
            $table->string('cpf',200);
            $table->string('titulacao',200);
            $table->string('dedicacao',200);
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
        Schema::dropIfExists('curso');
    }
}
