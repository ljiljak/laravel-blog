<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'title', 'body', 'is_published'
	];
    public static function getPublished() {
    	return self::where('is_published', true)->get();
    }
    public function comments () {
    	return $this->hasMany('App\Comment');
    }

    public function user () {
    	return $this->belongsTo ('App\User');
    }

    public function tags() {
        return $this->belongsToMany('App\Tag');
    }
    
}
