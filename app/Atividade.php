<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    protected $fillable = ['aula','conteudo'];
   	protected $table = 'atividade';
}
