<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Carbon\Carbon;
class Iklan extends Model
{
    protected $dates=['published_at'];
    public function getImageUrlAttribute($value){
    	$imageUrl="";
    if(! is_null($this->image)){
    	$imagePath=public_path()."/img/".$this->image;
    	if(file_exists($imagePath)) $imageUrl=asset("img/".$this->image);
    }
    return $imageUrl;
    }
     public function getImageThumbUrlAttribute($value){
        $imageUrl="";
    if(! is_null($this->image)){
        $ext=substr(strrchr($this->image,'.'),1);
        $thumbnail=str_replace(".{$ext}","_thumb.{$ext}", $this->image);
        $imagePath=public_path()."/img/".$thumbnail;
        if(file_exists($imagePath)) $imageUrl=asset("img/".$thumbnail);
    }
    return $imageUrl;
    }
    public function user(){
    	return $this->belongsTo(User::class);
    }
    public function scopeLatestFirst($query){
    	return $query->orderBy('published_at','desc');
    }
     public function scopePublished($query){
        return $query->where("published_at","<=",Carbon::now());
    }
    public function getDateAttribute($value){
    	return is_null($this->published_at) ? '' : $this->published_at->diffForHumans();
    }
      public function category(){
        return $this->belongsTo(Category::class);
    }
    public function getBodyHtmlAttribute($value){
        return $this->body ? Markdown::convertToHtml(e($this->body)) : Null;
    }
     public function scopePopular($query){
        return $query->orderBy('view_count','desc');
    }
}