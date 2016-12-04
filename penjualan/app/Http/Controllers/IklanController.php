<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Iklan;
use App\Http\Requests;
use Intervention\Image\Facades\Image;
class IklanController extends Controller
{
    	public function __construct(){
		$this->middleware('admin.user');
		 $this->uploadPath=public_path(config('cms.image.directory'));
	}
	public function create(Iklan $iklan){
    return view('admin.iklan-create',compact('iklan'));
	}
	public function store(Requests\IklanAdminRequest $request){
		$data= $this->handleRequest($request);
        Iklan::create($data);
        return redirect('admin_iklan')->with('message','Iklan Product berhasil di Tambah!');
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
    public function edit($id){
    	$iklan=Iklan::findOrFail($id);
       
    	return view("admin.iklan-edit",compact('iklan'));
    }
       public function update($id, Requests\IklanRequest $request){
    $iklan=Iklan::findOrFail($id);
    $oldImage=$iklan->image;
    $data= $this->handleRequest($request);
    $iklan->update($data);
    
    if($oldImage !== $iklan->image){
    		$this->removeImage($oldImage);
    	}
    	return redirect('admin_iklan')->with('message','Iklan Product Berhasil di Edit!');

    }
    public function destroy($id)
    {
    $iklan=Iklan::findOrFail($id);
    $iklan->delete();
    $this->removeImage($iklan->image);
    return redirect('admin_iklan')->with('message','Iklan Product bergasil di Hapus!');
    }

}
