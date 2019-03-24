<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRoles extends Model
{
    public $timestamps = false;
    protected $table = 'user_roles';
     protected $fillable = [
		'user_id', 
		'role_id', 
	];
}
