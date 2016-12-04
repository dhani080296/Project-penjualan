<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\User;
use App\Category;
use App\Comment;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
class AdminHomeController extends Controller
{
	public function __construct(){
		$this->middleware('admin.user');
	}
	protected $limit=5;
   public function index(Request $request){
    $keywords='%'.$request->get('term').'%';
        
      $categories=Category::where(function($query) use($request,$keywords){
         if(($term =$request->get("term"))){
            $query->orwhere("title",'Like','%'.$keywords);
             
         }
        })->latestFirst()->paginate($this->limit);
   	$categorycount=Category::count();
    return view("admin.admin-home",compact('categories','categorycount'));
   }
   public function comment(Request $request){
     $keywords='%'.$request->get('term').'%';
        
      $comment=Comment::where(function($query) use($request,$keywords){
         if(($term =$request->get("term"))){
            $query->orwhere("name",'Like','%'.$keywords);
             $query->orwhere("email",'Like','%'.$keywords);
            
         }
        })->latestFirst()->paginate($this->limit);
   	$commentcount=Comment::count();
    return view("admin.admin-comment",compact('comment','commentcount'));
   }
   public function user(Request $request){
     $keywords='%'.$request->get('term').'%';
        
      $users=User::where(function($query) use($request,$keywords){
         if(($term =$request->get("term"))){
            $query->orwhere("name",'Like','%'.$keywords);
             $query->orwhere("email",'Like','%'.$keywords);
             
         }
        })->latestFirst()->paginate($this->limit);
   	$usercount=User::count();
    return view("admin.admin-user",compact('users','usercount'));
   }
   public function iklan(Request $request){

   	$keywords='%'.$request->get('term').'%';
        
      $iklans=Iklan::where(function($query) use($request,$keywords){
         if(($term =$request->get("term"))){
            $query->orwhere("title",'Like','%'.$keywords);
             
         }
        })->latestFirst()->paginate($this->limit);
   	$iklancount=Iklan::count();
    return view("admin.admin-iklan-product",compact('iklans','iklancount'));
   }
}
