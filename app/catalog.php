<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class catalog extends Model
{
    //
    protected $table = "catalog";

    public function product() {

    	return $this->hasMany('App\product','catalog_id','id');

    }
}
