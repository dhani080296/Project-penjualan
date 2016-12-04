<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\User;
use App\Category;
use App\Comment;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
class PenjualController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
        $this->uploadPath=public_path(config('cms.image.directory'));
    }
    public function create(Iklan $iklan){
    	return view("penjual.penjual-create",compact('iklan'));
    }
    public function store(Requests\IklanRequest $request){
   		$data= $this->handleRequest($request);
        $request->user()->iklans()->create($data);
        return redirect('home')->with('message','Iklan Product berhasil di Tambah!');
    }
    private function handleRequest($request){
        $data=$request->all();
        if($request->hasFile('image')){
            $image=$request->file('image');
            $fileName=$image->getClientOriginalName();
            
            $destination=$this->uploadPath;
            $successUploaded=$image->move($destination,$fileName);
            if($successUploaded){
            $width=config('cms.image.thumbnail.width');
            $height=config('cms.image.thumbnail.height');
            $extension=$image->getClientOriginalExtension();
            $thumbnail=str_replace(".{$extension}", "_thumb.{$extension}",$fileName);
                Image::make($destination.'/'.$fileName)->resize($width, $height)->save($destination.'/'.$thumbnail);
            }
            $data['image']=$fileName;
        }
        return $data;
    }
    public function edit($id){
    	$iklan=Iklan::findOrFail($id);
        $this->authorize('modify',$iklan);
    	return view("penjual.penjual-edit",compact('iklan'));
    }
    public function update($id, Requests\IklanRequest $request){
    $iklan=Iklan::findOrFail($id);
    $this->authorize('modify',$iklan);
    $oldImage=$iklan->image;
    $data= $this->handleRequest($request);
    $iklan->update($data);
    
    if($oldImage !== $iklan->image){
    		$this->removeImage($oldImage);
    	}
    	return redirect('home')->with('message','Iklan Product Berhasil di Edit!');

    }
    private function removeImage($image){
    	if(!empty($image)){
    		$imagepath=$this->uploadPath.'/'.$image;
    		$extension=substr(strrchr($image,'.'),1);
    		$thumbnail=str_replace(".{$extension}", "_thumb.{$extension}",$image);
    		$thumbnailpath=$this->uploadPath.'/'.$thumbnail;
    		if(file_exists($imagepath)) unlink($imagepath);
    		if(file_exists($thumbnailpath)) unlink($thumbnailpath);
    	}
    }
    public function destroy($id)
    {
    $iklan=Iklan::findOrFail($id);
    $this->authorize('modify',$iklan);
    $iklan->delete();
    $this->removeImage($iklan->image);
    return redirect('home')->with('message','Iklan Product bergasil di Hapus!');
    }

}
