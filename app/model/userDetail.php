<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class userDetail extends Model
{
    public function user(){
        return $this->belongsTo('App\user');
    }
}
