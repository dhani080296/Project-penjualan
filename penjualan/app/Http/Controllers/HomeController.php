<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\User;
use App\Category;
use App\Comment;
use App\Http\Requests;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit=3;
    public function index(Request $request)
    {  
        
        $userId=$request->user()->id;
       $categoryId=$request->get('category_id');
       $keywords='%'.$request->get('term').'%';
        
        $iklans=Iklan::where(function($query) use($keywords,$userId,$categoryId){
            
            $query->where("user_id", $userId);
            if($categoryId)$query->where('category_id',$categoryId);
            $query->where("title",'Like','%'.$keywords);
             })->orwhere(function($query) use ($userId,$keywords,$categoryId){
             $query->where("user_id", $userId);
             if($categoryId)$query->where('category_id',$categoryId); 
           $query->where("address",'Like','%'.$keywords);
            
         
        })->latestFirst()->paginate($this->limit);
        return view('penjual.home',compact('iklans'));
    }
     public function show(Iklan $iklan,Comment $comment){
          $iklanId=$iklan->id;
        $comments=$comment->with('iklans')->where(function($query) use ($iklanId){
            if($iklanId)$query->where('iklan_id',$iklanId);
        })->latestFirst()->published()->simplepaginate($this->limit);

        return view("penjual.penjual-show",compact('iklan','comments'));
    }
    
    public function store(Requests\commentPenjualRequest $request){
      Comment::create($request->all());
    return redirect("home")->with('message','Comentar Berhasil Dikirim!');
    }

}
