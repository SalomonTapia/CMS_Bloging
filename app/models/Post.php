<?php

class Post extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		return $this->belonsTo('User');
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
