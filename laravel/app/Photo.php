<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'url', 'user_id', 'description',
    ];

    public function comments(){
    	return $this->hasMany('App\Comment');
    }
}
