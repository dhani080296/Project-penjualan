<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
class UserController extends Controller
{
        public function __construct(){
        $this->middleware('admin.user');
    }
    public function create(User $user){
    	return view('admin.user-create',compact('user'));
    }
    public function store(Requests\UserRequest $request){
    	User::create([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect('admin_user')->with('message','User berhasil di Tambah!');
    }
    public function edit($id){
    	$user=User::findOrFail($id);
    	return view("admin.user-edit",compact('user'));
    }
    public function update($id,Requests\UserRequest $request){
    	$user=User::findOrFail($id);
    	$user->update([
            'name' => $request['name'],
            'slug' => $request['slug'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect('admin_user')->with('message','User berhasil di Edit!');
    }
    public function destroy($id){
    	$user=User::findOrFail($id);
    $user->delete();
    
    return redirect('admin_user')->with('message','USer berhasil di Hapus!');
    }
}
