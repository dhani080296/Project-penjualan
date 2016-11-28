<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function iklans(){
    	return $this->hasMany(Iklan::class);
    }
    public function getRouteKeyName(){
    	return 'slug';
    }
}
