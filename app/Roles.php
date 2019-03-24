<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
	//
	public $timestamps = false;
	public function role_privileges()
	{
		return $this->hasMany('App\RolesPrivileges');
	}
}
