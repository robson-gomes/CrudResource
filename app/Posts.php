<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
	protected $table = 'Posts';
    protected $fillable = ['title', 'body'];
    protected $dates = ['created_at','update_at'];
}
