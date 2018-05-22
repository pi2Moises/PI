<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bibliografia extends Model
{
    // protected $timestaps = false;
   	protected $fillable = ['curso','disciplina','titulo','autor','isbn','ano','editora'];
   	protected $table = 'bibliografia';
}
