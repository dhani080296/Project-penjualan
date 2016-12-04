<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Http\Requests;
class CommentController extends Controller
{
    public function __construct(){
		$this->middleware('admin.user');
	}
    public function destroy($id){
    	$comment=Comment::findOrFail($id);
    $comment->delete();
    
    return redirect('admin_comment')->with('message','Category bergasil di Hapus!');
    }
    public function create(Comment $comment){
    	return view('admin.comment-create',compact('comment'));
    }
    public function store(Requests\CommentAdminRequest $request){
    
    Comment::create($request->all());
    return redirect("admin_comment")->with('message','Comentar Berhasil di Tambah!');
    }
    
    public function edit($id){
    	$comment=Comment::findOrFail($id);
    	return view("admin.comment-edit",compact('comment'));
    }
    public function update($id,Requests\CommentAdminRequest $request){
    $comment=Comment::findOrFail($id);
     $comment->update($request->all());
    
    return redirect("admin_comment")->with('message','Comentar Berhasil di Edit!');
    }
}
