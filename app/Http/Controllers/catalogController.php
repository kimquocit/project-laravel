<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\catalog;
use DateTime;

class catalogController extends Controller
{
    //
    public function getList () {
    	return catalog::orderBy('id','DESC')->get();
    	// $catalog = catalog::all();
    }

    public function showList () {
    	return view('admin.catalog.list');
    }

    public function getAdd() {
    	return view('admin.catalog.add');
    }

    public function postAdd(request $request) {
    	$catalog = new catalog;
    	$catalog->name = $request->name;
    	$catalog->created_at = new DateTime();
    	$catalog->save();
    	return redirect('admin/catalog/add')->with('message','Add Success');

    }
}
