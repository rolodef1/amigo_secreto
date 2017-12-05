<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
	protected $table = 'Integrantes';

	protected $fillable = ['nombre','email'];

	public function grupo()
	{	
		return $this->belongsTo('App\Grupo');
	}

	public function a_quien_regala(){
		return $this->hasOne('App\Integrante','entrega_a');
	}

}
