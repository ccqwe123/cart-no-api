<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\UserRoles;
use App\Privileges;
use App\RolePrivileges;
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

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_title = "User List";
        $users = DB::table('users')
            ->select('users.*','roles.role_name')
            ->leftJoin('user_roles', 'user_roles.user_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'user_roles.role_id')
            ->whereNull('users.deleted_at')
            ->where('users.status','=','0')
            ->paginate(10);
        return view('admin.user_list',[
            'users' => $users,
            'user_title' => $user_title,
        ]);
    }
    public function userban()
    {
        $user_title = "Banned Users";
        $users = DB::table('users')
            ->select('users.*','roles.role_name')
            ->leftJoin('user_roles', 'user_roles.user_id', '=', 'users.id')
            ->leftJoin('roles', 'roles.id', '=', 'user_roles.role_id')
            ->where('users.status','=','1')
            ->paginate(10);
        return view('admin.user_list',[
            'users' => $users,
            'user_title' => $user_title,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $roles = DB::table('roles')
                ->where('role_name','normaluser')
                ->get();
        $validator = Validator::make($request->all(), [  
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255|min:2',   
            'address' => 'required|max:100|min:2',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->file('photo')==null || $request->file('photo')=='')
        {
            $photoFileName='anon.png';
        }
        else
        {
            $current_time = Carbon::now()->timestamp;
            $destinationPath = 'uploads/users';
            $photoExtension = $request->file('photo')->getClientOriginalExtension(); 
            $photoFileName = 'user_photo'.$current_time.'.'.$photoExtension;
            $request->file('photo')->move($destinationPath, $photoFileName);
        }

        $user = User::create([
            'username'  =>  $request->input('username'),
            'password'  =>  Hash::make($request->input('password')),
            'full_name'    =>  $request->input('full_name'),
            'address'   =>  $request->input('address'),
            'email' =>  $request->input('email'),
            'contact_no'=> $request->input('contactnum'),
            'user_type'=>   'normal',
            'status'   =>  '0',
            'photo'  =>  $photoFileName,
            ]);
        $insert_role = UserRoles::create([
            'user_id' => $user->id,
            'role_id' => $roles[0]->id,
        ]);
        return redirect()->back()->with('success', 'User Added'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $password = $request->input('password');
        $x = User::find($id);
        $x->full_name = $request->input('full_name');
        $x->address = $request->input('address');
        $x->contact_no = $request->input('contact_no');
        $x->email = $request->input('email');
        $x->username = $request->input('username');
        if($password == '' || $password == null)
        {

        }else{
            $x->password = Hash::make($request->input('password'));
        }
        $x->save();               

        return redirect('/admin/')->with('flash_message', 'Problem Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
