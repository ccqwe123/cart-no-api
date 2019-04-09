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
use App\Notifications\VerifyMail;
use Illuminate\Support\Facades\Notification;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function userLogin()
    {
        if(Auth::check()){ return redirect()->back();}
        return view('login');
    }

    public function authenticate(Request $request)
    {
        
        $credentials = [
            'username' => Input::get('username'),
            'password' => Input::get('password'),
        ];
        if(!Auth::attempt($credentials))
        {
            Session::flash('flash_error','Invalid username/password!');
            //return Response::json(array('success' => false));
            return redirect()->back();
        }

    
        $this->checkIfExist('is_superadmin_account');
        $this->checkIfExist('is_admin_account');
        $this->checkIfExist('is_moderator_account');
        $this->checkIfExist('is_normaluser_account');
        $this->checkIfExist('is_allow_add_product');
        $this->checkIfExist('is_allow_edit_product');
        $this->checkIfExist('is_allow_delete_product');
        
        
        $privileges = Privileges::get();
        foreach ($privileges as $privilege) {
            $privilegeText = ''.$privilege->name;
            $this->checkIfExist($privilegeText);
            $p = User::find(Auth::user()->id)->checkPrivileges($privilegeText);
            session([$privilegeText =>  $p]); 
        }
        $checkuser = User::find(Auth::user()->id);
        Session::flash('flash_message','Logged in!');
        session(['username' =>  Input::get('username')]); 
        log::info($checkuser->verified);
        if($checkuser->verified == 0)
        {
            auth()->logout();
            return redirect('/login')->with('flash_message', 'Your email '.$checkuser->email .' is not Verified, Please Verify Your Email Address');
        }else{
         return redirect('/');
        }
    } 
    function checkIfExist($x)
    {
        $user = Privileges::firstOrNew(array('name' => $x));
        $user->name = $x;
        $user->save();
    }

    public function logout(Request $request)
    {

        auth()->logout();
        return redirect('/');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function reg()
    {
        return view('register');
    }
    public function getreg(Request $request)
    {
        $roles = DB::table('roles')
                ->where('role_name','normaluser')
                ->get();
        $validator = Validator::make($request->all(), [  
            'full_name' => 'required|regex:/^[\pL\s\-]+$/u|max:255|min:2',   
            'address' => 'required|max:100|min:2',
            // 'contactnum' => 'required|max:13|min:10',
            'username' => 'required|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
        ]);

        if ($validator->fails()) {
            return redirect('/register')
                        ->withErrors($validator)
                        ->withInput();
        }

        if($request->file('user_photo')==null || $request->file('user_photo')=='')
        {
            $photoFileName='anon.png';
        }
        else
        {
            $current_time = Carbon::now()->timestamp;
            $destinationPath = 'images/user';
            $photoExtension = $request->file('user_photo')->getClientOriginalExtension(); 
            $photoFileName = 'user_photo'.$current_time.'.'.$photoExtension;
            $request->file('user_photo')->move($destinationPath, $photoFileName);
        }

        $user = User::create([
            'username'  =>  $request->input('username'),
            'password'  =>  Hash::make($request->input('password')),
            'full_name'    =>  $request->input('full_name'),
            'address'    =>  $request->input('address'),
            'email' =>  $request->input('email'),
            'contact_no'=> $request->input('contactnum'),
            'photo'  =>  $request->file('photo'),
            'status'   =>  '0',
            'photo'  =>  $photoFileName,
            ]);

        $verifyUser = VerifyUser::create([
            'user_id' => $user->id,
            'token' => sha1(time())
        ]);
        $user->notify(new VerifyMail($user));
        // return $user; 
        $insert_role = UserRoles::create([
            'user_id' => $user->id,
            'role_id' => $roles[0]->id,
        ]);
        // Auth::login($user);
        $url = $request->input('url');
        return redirect()->back()->with('flash_message', 'You Have Been Successfully Registered, Please check your email to activate your Account');
    }
    public function verifyUser(Request $request)
    {
        $verifyUser = VerifyUser::where('token', $request->token)->first();
        if(isset($verifyUser) ){
            $user = $verifyUser->user;
            if(!$user->verified) {
              $verifyUser->user->verified = 1;
              $verifyUser->user->save();
              $status = "Your e-mail is verified. You can now login.";
          } else {
              $status = "Your e-mail is already verified. You can now login.";
          }
      } else {
        // return redirect('/login')->with('warning', "Sorry your email cannot be identified.");
    }
    return redirect('/login')->with('status', $status);
    }
    public function userinfo(Request $request)
    {
        return view("users.profile");
    }
    public function useraddress(Request $request)
    {
        $state = DB::table('locations')
            ->get();
        return view("users.address",compact('state'));
    }
    public function userdashboard(Request $request)
    {
        return view("users.user-dashboard");
    }
}
