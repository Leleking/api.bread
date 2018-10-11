<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['name','category_id','details','image','pieces','price'];
    public function category(){
        return $this->belongsTo('App\model\category');
    }
    public function user(){
        return $this->belongsTo('App\User');
    }
}
