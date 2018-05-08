<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class curso extends Model
{
   	protected $fillable = ['cod_curso','nome_curso','t_curso','modalidade','denominacao_curso','habilitacao','local_oferta','turno_func','num_vagas','carga_h_curso','regime_letivo','periodo','coord_curso','cpf','titulacao','dedicacao'];
   	protected $table = 'curso';
}
