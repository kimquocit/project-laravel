<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $table = "product";

    public $timestamps = false;

    public function catalog() {

    	return $this->belongsTo('App\catalog','catalog_id','id');

    }
}
