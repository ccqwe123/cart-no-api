<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Privileges extends Model
{
    //
    public $timestamps = false;
    protected $fillable = [
		'name'
	];
    public function roles()
    {
        return $this->hasManyThrough('App\Roles', 'App\RolesPrivileges');
    }
}
