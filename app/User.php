<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable {

	protected $table = 'users';
	public $timestamps = true;
	protected $fillable = array('email', 'username', 'timestamps');
	protected $hidden = array('password');

	public function asksManager()
	{
		return $this->hasMany('Asks', 'manager_id');
	}

	public function asks()
	{
		return $this->morphMany('Asks', 'askable');
	}

	public function userdetails()
	{
		return $this->hasOne('User');
	}

}