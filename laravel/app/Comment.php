<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'message', 'user_id', 'photo_id',
    ];

    public function photos(){
    	return $this->belongsTo('App\Photo');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}
