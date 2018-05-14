<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    	// protected $timestaps = false;
   	protected $fillable = [
   	'nome_prof',
    'cpf',
    'titulacao',
    'formacao',
    'curriculo',
    'dt_atualizacao',
    'matricula',
    'dt_admissao',
    'hora_nde',
    'tcc',
    'c_curso',
    'coord_o_curso',
    'pesquisa',
    'atv_extra',
    'atv_extra_outro_curso',
    'qtd_horas_curso',
    'qtd_horas_outros_curso',
    'dt_inicio_vinc_curso',
    'tot_tempo_vinc_curso',
    'dt_inicio_exp_mag',
    'tot_tempo_exp_mag',
    'dt_inicio_curso_dist',
    'tot_tempo_curso_dist',
    'dt_inicio_exp_prof',
    'tot_tempo_exp_prof',
    'participacao_evento',
    'na_area',
    'em_outras_areas',
    'livro_pub_area',
    'livro_pub_outra_area',
    'trab_pub_comp',
    'resumo_pub_comp',
    'prop_int_dep',
    'prop_int_dep_regist',
    'out_pub_1',
    'out_pub_2',
    'out_pub_3',
    'membro_nde',
    'membro_colegiado',
    'docente_pedagogia'];
   	protected $table = 'professor';
}
