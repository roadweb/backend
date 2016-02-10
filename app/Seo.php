<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Seo extends Model {

	protected $table = 'seo';
	public $timestamps = false;

	use SoftDeletes;

	protected $dates = ['deleted_at'];
	protected $fillable = array(
		'post_id',
		'url_thumb',
		'alt_thumb',
		'title_thumb',
		'head_title',
		'head_description',
		'head_keywords');

	public function posts()
	{
		return $this->hasOne('Post');
	}

}