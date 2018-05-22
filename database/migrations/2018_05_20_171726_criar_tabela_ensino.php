<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaEnsino extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ensino', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso',50);
            $table->string('ano',50);
            $table->string('semestre',50);
            $table->string('disciplina',50);
            $table->string('nome_disciplina',50);
            $table->string('carga_horaria_curso',50);
            $table->string('periodo_curso',50);
            $table->string('matri_professor',50);
            $table->string('nome_professor',50);
            $table->string('ementa',200);
            $table->string('compet_hab',200);
            $table->string('metod_ensino',200);
            $table->string('cronograma_aula',200);
            $table->string('conteudo',200);
            $table->string('avaliacao',200);
            $table->string('bibliografia',200);
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
        Schema::dropIfExists('ensino');
    }
}
