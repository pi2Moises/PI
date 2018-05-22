<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ppc extends Model
{
    protected $fillable = ['curso','perfil_curso','perfil_egresso','acesso_curso','rep_grafica','sis_aval','sis_aval_projeto_curso','tcc','estagio_curricular','pol_atend'];
   	protected $table = 'ppc';
}
