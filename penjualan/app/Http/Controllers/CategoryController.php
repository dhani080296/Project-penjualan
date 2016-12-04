<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Requests;
class CategoryController extends Controller
{
	public function __construct(){
		$this->middleware('admin.user');
	}
    public function create(Category $category){
    	return view('admin.category-create',compact('category'));
    }
    public function store(Requests\CategoryRequest $request){
       Category::create($request->all());
        return redirect('admin_home')->with('message','Category berhasil di Tambah!');
    }
    public function edit($id){
    	$category=Category::findOrFail($id);
    	return view("admin.category-edit",compact('category'));
    }
    public function update($id,Requests\CategoryRequest $request){
    	 $category=Category::findOrFail($id);
    
    $category->update($request->all());
    
    	return redirect('admin_home')->with('message','Category Berhasil di Edit!');
    }
    public function destroy($id){
    	$category=Category::findOrFail($id);
    $category->delete();
    
    return redirect('admin_home')->with('message','Category berhasil di Hapus!');
    }
}
