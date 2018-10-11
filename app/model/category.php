<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }
}
