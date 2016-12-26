<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\catalog;
use App\product;
use DateTime;

class productController extends Controller
{
     //
    public function getList () {
    	//return product::orderBy('id','DESC')->get();
    	$product = product::orderBy('id','DESC')->get();
    	return view('admin.product.list',['product'=>$product]);
    }

    public function getAdd() {
    	$catalog = catalog::all();
    	return view('admin.product.add',['catalog'=>$catalog]);
    }

    public function postAdd(request $request) {
    	$this->validate($request,[
    		'name'=>'required|unique:product,name|min:1|max:100',
    		'catalog'=>'required',
    		'price'=>'required|numeric'

    	],
    	[
    		'name.required'=>'Required',
    		'name.unique'=>'Trung',
    		'name.min'=>'Min',
    		'name.max'=>'Max',
    		'catalog.required'=>'Required',
    		'price.required'=>'Required',
    		'price.numeric'=>'Numeric',
    	]);
    	$product = new product;
    	$product->name = $request->name;
    	$product->catalog_id = $request->catalog;
    	$product->price = $request->price;
    	$product->content = $request->content;
    	$product->created_at = new DateTime();
    	$product->save();
    	return redirect('admin/product/add')->with('message','Add Success');

    }

    public function getEdit ($id) {
    	$catalog = catalog::all();
    	$product = product::find($id);
    	return view('admin.product.edit',['product'=>$product,'catalog'=>$catalog]);
    	
    }

    public function postEdit(request $request, $id)
    {
    	$this->validate($request,[
    		'name'=>'required|unique:product,name|min:1|max:100',
    		'catalog'=>'required',
    		'price'=>'required|numeric'

    	],
    	[
    		'name.required'=>'Required',
    		'name.unique'=>'Trung',
    		'name.min'=>'Min',
    		'name.max'=>'Max',
    		'catalog.required'=>'Required',
    		'price.required'=>'Required',
    		'price.numeric'=>'Numeric',
    	]);
    	$product = product::find($id);
    	$product->name = $request->name;
    	$product->catalog_id = $request->catalog;
    	$product->price = $request->price;
    	$product->content = $request->content;
    	$product->updated_at = new DateTime();
    	$product->save();
    	return redirect('admin/product/edit/'.$id)->with('message','Edit Success');
    }

    public function getDelete($id)
    {
    	$product = product::find($id);
    	$product->delete();
    	return redirect('admin/product/list/')->with('message','Delete Success');

    }
}
