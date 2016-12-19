<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = "product";

    public function catalog() {

    	return $this->belongsTo('App\catalog','product_id','id');

    }
}
