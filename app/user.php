<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

class user extends Model
{
    protected $fillable = ['name', 'email'];

    public function phone()
    {
    	// return this->('App\Phone');
    	return $this->hasOne(Phone::class);
    }

    public function post() 
    {
    	return $this->hasMany(Post::class);
    }
}
