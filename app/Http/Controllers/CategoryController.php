<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\UserRoles;
use App\Privileges;
use App\RolePrivileges;
use App\VerifyUser;
use App\Category;
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

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_title = "Category List";
        $category = DB::table('category')
            ->whereNull('deleted_at')
            ->paginate(10);
        return view('admin.category.category_list',['category' => $category, 'category_title' =>$category_title,]);
    }
    public function archivecategory()
    {
        $category_title = "Not Listed Category";
        $category = DB::table('category')
            ->whereNotNull('deleted_at')
            ->paginate(10);
        return view('admin.category.category_list',['category' => $category,'category_title'=>$category_title]);
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
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|max:50|min:2',
        ]);

        if ($validator->fails()) {
            return redirect('/admin/category')
                        ->withErrors($validator)
                        ->withInput();
        }
        DB::table('category')->insert([
                'category_name' => $request->input('category_name'),
                ]);

        return redirect()->back()->with('flash_message', 'Category Added!!');
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
        $validator = Validator::make($request->all(), [
            'category_name' => 'required|max:50|min:2',    
        ]);

        if ($validator->fails()) {
            return redirect('/admin/category')
                        ->withErrors($validator)
                        ->withInput();
        }

        $x = Category::find($id);
        $x->category_name = $request->input('category_name');
        $x->save();

        return redirect()->back()->with('flash_message', 'Category Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $x = Category::find($id);
        if ($x) {
            $x->delete();
        }
        return redirect()->back()->with('flash_message', 'Category Deleted!!');
    }
}
