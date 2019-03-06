<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class phone extends Model
{
    protected $fillable = ['user_id', 'phone'];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
