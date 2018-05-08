<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class disciplina extends Model
{
	// protected $timestaps = false;
   	protected $fillable = ['disciplina','descricao','codigo','semestre','carga_horaria'];
   	protected $table = 'disciplina';
}
