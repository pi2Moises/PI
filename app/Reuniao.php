<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reuniao extends Model
{
   	protected $fillable = ['dt_reuniao','local_reuniao','participantes','deliberacoes'];
   	protected $table = 'reuniao';
}
