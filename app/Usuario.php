<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model as Eloquent;
use App\perfil;

class Usuario extends Eloquent 
{
	protected $collection = 'usuario';
	protected $fillable = ['nome', 'idade', 'perfil', 'id_perfil'];
	protected $connection = 'mongodb';
}		