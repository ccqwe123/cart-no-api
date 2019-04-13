<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\UserRoles;
use App\Privileges;
use App\RolePrivileges;
use App\VerifyUser;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use View;
use Log;
use Hash;
use Validator;
use Response;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Auth;

class RolesController extends Controller
{
    public function index()
    {
    	$roles = DB::table('roles')
			->whereNull('deleted_at')
			->paginate(10);
		return view('admin.roles.list_role',['roles' => $roles]);
    }
    public function store(Request $request)
	{
		//
		$validator = Validator::make($request->all(), [
			'role_name' => 'required|max:50|min:4',
		]);

		if ($validator->fails()) {
			return redirect('/admin/roles')
						->withErrors($validator)
						->withInput();
		}
		DB::table('roles')->insert([
				'role_name' => $request->input('role_name'),
				]);

		return redirect()->back()->with('flash_message', 'Role Added!!');
	}
    public function edit(Request $request, $id)
    {
    	$role = DB::table('roles')
			->where('id','=',$id)
			->get();

		return View::make('admin.roles.edit_role')
			->with('role', $role);
    }
    public function update(Request $request, $id)
	{
		$validator = Validator::make($request->all(), [
			'role_name' => 'required|max:50|min:4',    
		]);

		if ($validator->fails()) {
			return redirect('/admin/roles')
						->withErrors($validator)
						->withInput();
		}

		$x = Roles::find($id);
		$x->role_name = $request->input('role_name');
		$x->save();

		return redirect()->back()->with('flash_message', 'Role Updated!!');
	}
	public function destroy($id)
	{
		$x = Roles::find($id);
		if ($x) {
			$x->delete();
		}
		return redirect()->back()->with('flash_message', 'Role Deleted!!');
	}
	public function oldPrivilege($id)
	{
		// dd("");
		$role = DB::table('roles')
		->where('id','=',$id)
		->get();
		
		$has = DB::select("SELECT role_id,privilege_id,name FROM
				role_privileges rp INNER JOIN privileges p ON p.id=rp.privilege_id
				WHERE role_id=$id;");

		$hasnot = DB::select("SELECT id privilege_id,name FROM `privileges` p WHERE id NOT IN (
			SELECT id FROM role_privileges rp 
			JOIN `privileges` p ON p.id=rp.privilege_id WHERE role_id=$id)");

	return view('admin.roles.role_privilege',[
		'has' => $has,
		'hasnot' => $hasnot,
		'role' => $role
		]);
	}
	public function updatePrivilege(Request $request,$id,$method)
	{
		//
		// dd($request);
		if($method=='add')
		{
			if($request->input('privilege_id') == "")
            {
                return redirect('/admin/roles/'.$id.'/old_privilege')->with('flash_error', 'Please Select Privilege you want to add');
            }
			$privileges = Privileges::find($request->input('privilege_id'));
			$role = Roles::find($id);

			DB::table('role_privileges')->insert([
				'role_id'=>$id,
				'privilege_id'=>$request->input('privilege_id')
				]);
		}
		else
		{
			 if($request->input('privilege_id') == "")
            {
                return redirect('/admin/roles/'.$id.'/old_privilege')->with('flash_error', 'Please Select Privilege you Want to Remove');
            }
			$privileges = Privileges::find($request->input('privilege_id'));
			$role = Roles::find($id);
			DB::table('role_privileges')
				->where('role_id', '=', $id)
				->where('privilege_id', '=',$request->input('privilege_id'))
				->delete();
		}

		return redirect('/admin/roles/'.$id.'/old_privilege')->with('flash_message', 'Role Privilege Updated!!');
	}
}
