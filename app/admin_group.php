<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin_group extends Model
{
    //

	protected $table = "admin_group";

	public $timestamps = false;

	public function admin() {
		return $this->hasMany('App\admin','admin_id','id');
	}

}
