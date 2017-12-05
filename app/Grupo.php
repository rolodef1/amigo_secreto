<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
	protected $table = 'grupos';

	//protected $guarded = ['user_id','geom','coordenadas'];

	protected $fillable = ['nombre','minimo','maximo'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function integrantes()
	{
		return $this->hasMany('App\Integrante');
	}
}
