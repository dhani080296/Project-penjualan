<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{   protected  $fillable=['title','slug'];
    public function iklans(){
    	return $this->hasMany(Iklan::class);
    }
    public function getRouteKeyName(){
    	return 'slug';
    }
     public function scopeLatestFirst($query){
    	return $query->orderBy('created_at','desc');
    }
   
}
