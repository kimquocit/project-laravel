<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\product;

class productController extends Controller
{
    //
    public function getList () {
    	return product::orderBy('id','DESC')->get();
    }
}
