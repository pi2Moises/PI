<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarTabelaProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Professor', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_prof',200);
            $table->integer('cpf');
            $table->string('titulacao',200);
            $table->string('formacao',200);
            $table->string('curriculo',200);
            $table->string('dt_atualizacao',20);
            $table->integer('matricula');
            $table->string('dt_admissao',20);
            $table->integer('hora_nde');
            $table->integer('tcc');
            $table->integer('c_curso');//10
            $table->integer('coord_o_curso');
            $table->integer('pesquisa');
            $table->integer('atv_extra');
            $table->integer('atv_extra_outro_curso');
            $table->integer('qtd_horas_curso');
            $table->integer('qtd_horas_outros_curso');
            $table->integer('dt_inicio_vinc_curso');
            $table->integer('tot_tempo_vinc_curso');
            $table->integer('dt_inicio_exp_mag');
            $table->integer('tot_tempo_exp_mag');//10
            $table->integer('dt_inicio_curso_dist');
            $table->integer('tot_tempo_curso_dist');
            $table->integer('dt_inicio_exp_prof');
            $table->integer('tot_tempo_exp_prof');
            $table->integer('participacao_evento');
            $table->integer('na_area');
            $table->integer('em_outras_areas');
            $table->integer('livro_pub_area');
            $table->integer('livro_pub_outra_area');
            $table->integer('trab_pub_comp');//10
            $table->integer('resumo_pub_comp');
            $table->integer('prop_int_dep');
            $table->integer('prop_int_dep_regist');
            $table->integer('out_pub_1');
            $table->integer('out_pub_2');
            $table->integer('out_pub_3');
            $table->string('membro_nde',20);
            $table->string('membro_colegiado',20);
            $table->string('docente_pedagogia',20);
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
        Schema::dropIfExists('Professor');
    }
}
