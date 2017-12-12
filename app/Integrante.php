<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Integrante extends Model
{
	protected $table = 'integrantes';

	protected $fillable = ['nombre','email'];

	public function grupo()
	{	
		return $this->belongsTo('App\Grupo');
	}

}
