<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;

class userController extends Controller
{
    //
    public function getList() {
    	$user = User::orderBy('id','DESC')->get();

    	//print_r($admin);
 
    	return view('admin.user.list',['user'=>$user]);
    }


    public function getAdd() {
    	return view('admin.user.add');
    }

    public function postAdd(request $request) {
    	$this->validate($request,[
    		'name'=>'required',
    		'email'=>'required|email|unique:users,email',
    		'password'=>'required'
    	],
    	[
    		'name.required'=>'Required1',
    		'email.required'=>'Required2',
    		'email.email'=>'Not Email',
    		'email.unique'=>'Trung',
    		'password.required'=>'Required3'
    	]);

    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();
    	return redirect('admin/user/add')->with('message','Add Success');

    }

    public function getEdit($id) {
    	$user = User::find($id);
    	return view('admin.user.edit',['user'=>$user]);
    }

    public function postEdit(request $request, $id) {
    	$user = User::find($id);
    	$this->validate($request,[
    		'name'=>'required',
    		'password'=>'required'
    	],
    	[
    		'name.required'=>'Required',
    		'password.required'=>'Required'
    	]);

    	
    	$user->name = $request->name;
    	$user->password = bcrypt($request->password);
    	$user->save();
    	return redirect('admin/user/edit/'.$id)->with('message','Edit Success');

    }

    public function getDelete($id) {
    	$user = User::find($id);
    	$user->delete();
    	return redirect('admin/user/list/')->with('message','Delete Success');
    }

    public function getLogin() {
    	return view('admin.layout.login');
    }

    public function postLogin(request $request) {
    	$this->validate($request,
    	[
    		'email'=>'required',
    		'password'=>'required'
    	],
    	[
			'email.required'=>'Required',
    		'password.required'=>'Required'
    	]);

    	if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    	{
    		return redirect('admin/catalog/list');
    	}
    	else {
    		return redirect('admin/login')->with('message','Login Fails');;
    	}
    }

    public function getLogout() {
    	Auth::logout();
    	return redirect('admin/login');
    }

}
