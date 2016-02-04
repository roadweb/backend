<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asks extends Model {

	protected $table = 'asks';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array('job_id', 'manager_id', 'state_id', 'askable_id', 'askable_type', 'matter', 'likes', 'post_id');
	protected $visible = array('job_id', 'state_id', 'matter', 'likes');

	public function state()
	{
		return $this->belongsTo('State');
	}

	public function job()
	{
		return $this->belongsTo('Job');
	}

	public function manager()
	{
		return $this->belongsTo('User');
	}

	public function askable()
	{
		return $this->morphTo();
	}

	public function post()
	{
		return $this->hasOne('Post');
	}

}