<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'text'
    ];

    public function post() {
        return $this->belongsTo(Post::class);
    }
}