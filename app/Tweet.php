<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public function comment(){
        return $this->hasMany('App\Comment');
    }
    public function user(){
        return $this->belongsTo('App\user');
    }
}
