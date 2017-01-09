<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\admin_group;
use App\admin;

class adminController extends Controller
{
    //

    public function getList() {
    	$users = admin::orderBy('id','DESC')->get();

    	//print_r($admin);
 
    	return view('admin.user.list',['users'=>$users]);
    }


    public function getAdd() {
    	$per = admin_group::all();

    	//print_r($per);

    	return view('admin.user.add',['per'=>$per]);
    }

    public function postAdd(request $request) {
    	$this->validate($request,[
    		'name'=>'required',
    		'username'=>'required|unique:admin,username',
    		'password'=>'required'
    	],
    	[
    		'name.required'=>'Required',
    		'username.required'=>'Required',
    		'username.unique'=>'Trung',
    		'password.required'=>'Required'
    	]);

    	$admin = new admin;
    	$admin->name = $request->name;
    	$admin->username = $request->username;
    	$admin->password = bcrypt($request->password);
    	$admin->admin_group_id = $request->per;
    	$admin->save();
    	return redirect('admin/user/add')->with('message','Add Success');

    }

    public function getEdit($id) {
    	$per = admin_group::all();
    	$user = admin::find($id);
    	return view('admin.user.edit',['user'=>$user,'per'=>$per]);
    }

    public function postEdit(request $request, $id) {
    	$user = admin::find($id);
    	$this->validate($request,[
    		'name'=>'required',
    		'username'=>'required|unique:admin,username',
    		'password'=>'required'
    	],
    	[
    		'name.required'=>'Required',
    		'username.required'=>'Required',
    		'username.unique'=>'Trung',
    		'password.required'=>'Required'
    	]);

    	
    	$user->name = $request->name;
    	$user->username = $request->username;
    	$user->password = bcrypt($request->password);
    	$user->admin_group_id = $request->per;
    	$user->save();
    	return redirect('admin/user/edit/'.$id)->with('message','Edit Success');

    }

    public function getDelete($id) {
    	$user = admin::find($id);
    	$user->delete();
    	return redirect('admin/user/list/')->with('message','Delete Success');
    }

    public function getLogin() {
    	return view('admin.layout.login');
    }

    public function postLogin(request $request) {
    	$this->validate($request,
    	[
    		'username'=>'required',
    		'password'=>'required'
    	],
    	[
			'username.required'=>'Required1',
    		'password.required'=>'Required2'
    	]);

    	if(Auth::attempt(['username'=>$request->username,'password'=>$request->password]))
    	{
    		return redirect('admin/catalog/list');
    	}
    	else {
    		return redirect('admin/login');
    	}
    }

}
