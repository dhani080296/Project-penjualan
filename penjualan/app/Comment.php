<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Carbon\Carbon;
class Comment extends Model
{    protected  $fillable=['name','email','comment','iklan_id'];
	 protected $dates=['created_at'];
     public function iklans(){
        return $this->belongsTo(Iklan::class);
    }
    public function scopeLatestFirst($query){
    	return $query->orderBy('created_at','desc');
    }
     public function scopePublished($query){
        return $query->where("created_at","<=",Carbon::now());
    }
    public function getDateAttribute($value){
    	return is_null($this->created_at) ? '' : $this->created_at->diffForHumans();
    }
     public function getCommentHtmlAttribute($value){
        return $this->comment ? Markdown::convertToHtml(e($this->comment)) : Null;
    }


}
