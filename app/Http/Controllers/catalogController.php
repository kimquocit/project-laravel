<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\catalog;

class catalogController extends Controller
{
    //
    public function getList () {
    	return catalog::orderBy('id','DESC')->get();
    	// $catalog = catalog::all();
    }

    public function showList () {
    	return view('admin.catalog.list-test');
    }
}
