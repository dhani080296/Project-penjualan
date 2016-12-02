<?php 
function listcategory($userId){
	return DB::table('categories')
           ->select('categories.*', DB::raw('count(iklans.id) as total'))
           ->join('iklans','iklans.category_id','=','categories.id')
           ->where('iklans.user_id',$userId)
           ->groupBy('iklans.category_id')
           ->get();
}