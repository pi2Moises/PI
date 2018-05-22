<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaPpc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ppc', function (Blueprint $table) {
            $table->increments('id');
            $table->string('curso',200);
            $table->string('perfil_curso',200);
            $table->string('perfil_egresso',200);
            $table->string('acesso_curso',200);
            $table->string('rep_grafica',200);
            $table->string('sis_aval',200);
            $table->string('sis_aval_projeto_curso',200);
            $table->string('tcc',200);
            $table->string('estagio_curricular',200);
            $table->string('pol_atend',200);
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
        Schema::dropIfExists('ppc');
    }
}
