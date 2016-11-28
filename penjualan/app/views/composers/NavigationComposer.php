<?php
namespace App\views\composers;
use Illuminate\View\View;
use App\Category;
use App\Iklan;
/**
* 
*/
class NavigationComposer
{
	public function compose(View $view){
		$this->composeCategories($view);
		$this->composePopularIklans($view);
	}
	public function composeCategories(View $view){
		$categories=Category::with(['iklans'=>function($query){
            $query->published();
        }])->orderBy('title','asc')->get();
            $view->with('categories',$categories);
	}
	public function composePopularIklans(View $view)
	{
		 $populariklans=Iklan::published()->popular()->take(3)->get();
         $view->with('populariklans',$populariklans);
	}
	
	}