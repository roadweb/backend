<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model {

	protected $table = 'posts';
	public $timestamps = true;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array(
		'category_id',
		'job_id',
		'userdetails_id',
		'title', 'resume',
		'matter', 'is_sticky',
		'sticky_end',
		'published',
		'validated',
		'created_at',
		'updated_at');
	// protected $visible = array('category_id', 'job_id', 'userdetails_id', 'title', 'resume', 'matter', 'is_sticky', 'sticky_end', 'published');

	public function userdetails()
	{
		return $this->belongsTo('UserDetails');
	}

	public function category()
	{
		return $this->belongsTo('Category');
	}

	public function job()
	{
		return $this->belongsTo('Job');
	}

	public function seo()
	{
		return $this->hasOne('Seo');
	}

	public function tags()
	{
		return $this->belongsToMany('\Tags')->withPivot('posts_has_tags');
	}

	public function ask()
	{
		return $this->hasOne('Asks');
	}

}