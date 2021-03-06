<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','slug',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

     public function iklans(){
        return $this->hasMany(Iklan::class,'user_id');
    }
    public function getRouteKeyName(){
        return 'slug';
    }
    public function scopeLatestFirst($query){
        return $query->orderBy('created_at','desc');
    }
}
