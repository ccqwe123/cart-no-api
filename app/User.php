<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use SoftDeletes, Notifiable;
    protected $fillable = [
        'username', 'password', 'full_name', 'address', 'contact_no', 'email', 'photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $table = 'users';

    public function roles()
    {
        return $this->hasMany('App\UserRoles');
    }
    public function checkPrivileges($privileges)
    {
        $id = $this->id;
        $userRoles = UserRoles::where('user_id',$id)->first();
        $role_id = $userRoles== '' ? 0 : $userRoles->role_id;
        $Privileges = Privileges::where('name',$privileges)->first();

        $RolePrivileges = RolePrivileges::where('role_id',$role_id)
            ->where('privilege_id',$Privileges->id)
            ->get();
        return count($RolePrivileges)>0 ? 1 : 0;

    }
    public function verifyUser()
    {
      return $this->hasOne('App\VerifyUser');
    }
}
