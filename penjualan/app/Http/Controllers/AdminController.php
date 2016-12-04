<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\AdminUser;
use App\Http\Requests;
class AdminController extends Controller
{
    	public function __construct(){
		$this->middleware('admin.user');
	}
	public function edit($id){
    $admin=AdminUser::findOrFail($id);
    	return view("admin.admin-edit",compact('admin'));
	}
	 public function update($id,Requests\AdminRequest $request){
    	$admin=AdminUser::findOrFail($id);
    	$admin->update([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        return redirect('admin_home')->with('message','Admin berhasil di Edit!');
    }
}
