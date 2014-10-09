<?php

class Post extends \Eloquent {
	protected $fillable = ['titulo','descripcion','imagen','contenido','tags','user_id'];

	public function user()
	{
		return $this->belongsTo('User');
	}

	public function comments()
	{
		return $this->hasMany('Coment');
	}
	public function logs()
	{
		return $this->hasMany('Log');
	}
}
