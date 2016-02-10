<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserSocialNetwork extends Model {

	protected $table = 'user_socialnetwork';
	public $timestamps = false;
	protected $fillable = array('userdetails_id', 'socialnetwork_id', 'url');

	public function userdetails()
	{
		return $this->belongsTo('UserDetails');
	}

	public function socialnetwork()
	{
		return $this->hasMany('SocialNetwork');
	}

}