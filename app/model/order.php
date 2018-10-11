<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    public function user(){
        return $this->belongsTo('App\user');
    }
    public function product(){
        return $this->belongsTo('App\model\product');
    }
}
