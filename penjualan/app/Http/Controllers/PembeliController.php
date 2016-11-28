<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\User;
use App\Category;
class PembeliController extends Controller
{
	protected $limit=3;
    public function autocomplete(Request $request)
    {
        if ($request->ajax())
        {
            return  Contact::select(['id', 'title as value'])->where(function($query) use ($request) {
                                if ( ($term = $request->get("term")) )
                                {
                                    $keywords = '%' . $term . '%';
                                    $query->orWhere("title", 'LIKE', $keywords);
                                    $query->orWhere("address", 'LIKE', $keywords);
                                    
                                }
                            })
                            ->orderBy('title', 'asc')
                            ->take(5)
                            ->get();
        }
    }
    public function index(Request $request)
    {   
        
        $keywords='%'.$request->get('term').'%';
        
    	$iklans=Iklan::with('user')->where(function($query) use($request,$keywords){
         if(($term =$request->get("term"))){
            $query->orwhere("title",'Like','%'.$keywords);
             $query->orwhere("address",'Like','%'.$keywords);
            
         }
        })->latestFirst()->published()->paginate($this->limit);
    return view("pembeli.index",compact('iklans'));	
    }
    public function show(Iklan $iklan){
    	$iklan->increment('view_count');
    	return view("pembeli.show",compact('iklan'));
    }
    public function category(Category $category){
        $categoryName=$category->title;
        
        $iklans=$category->iklans()->with('user')->latestFirst()->published()->paginate($this->limit);
    return view("pembeli.index",compact('iklans','categoryName'));  
    }
       public function user(User $user){
    $userName=$user->name;
        
        $iklans=$user->iklans()->with('category')->latestFirst()->published()->paginate($this->limit);
    return view("pembeli.index",compact('iklans','userName'));
    }
}
