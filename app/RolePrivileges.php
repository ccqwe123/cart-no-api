<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RolePrivileges extends Model
{
    //
    public $timestamps = false;
    public function roles()
	{
		return $this->hasMany('App\Roles','id');
	}
	public function privileges()
	{
		return $this->hasMany('App\Privileges','id');
	}
}
