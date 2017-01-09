<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //

    protected $table = "admin";

    public $timestamps = false;

    public function admin_group () {
    	return $this->belongsTo('App\admin_group','admin_group_id','id');
    }
}
