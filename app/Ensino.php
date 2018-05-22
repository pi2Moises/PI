<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensino extends Model
{
    // protected $timestaps = false;
   	protected $fillable = ['curso','ano','semestre','disciplina','nome_disciplina','carga_horaria_curso','periodo_curso','matri_professor','nome_professor','ementa','compet_hab','metod_ensino','cronograma_aula','conteudo','avaliacao','bibliografia'];
   	protected $table = 'ensino';
}
