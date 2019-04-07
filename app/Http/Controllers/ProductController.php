<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\Images;
use App\UserRoles;
use App\Products;
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
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("users.profile");
    }
    public function adminindex()
    {
        $products = DB::table('products')
            ->join('category','products.category_id','=','category.id')
            ->whereNull('products.deleted_at')
            ->paginate(10);
        // log::info($products);
        return view('admin.products.product_list',['products' => $products]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("users.profile");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function solditems(Request $request)
    {
        return view("users.profile");
    }
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function archive_product_list()
    {
        return view("users.profile");
    }
    public function destroy($id)
    {
        //
    }
    public function sell_product()
    {
        return view("products.add_product");
    }
    public function post_product(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:20|min:3',    
            'price' => 'required|max:100|min:1',    
            'location' => 'required|max:255|min:4', 
            'payment' => 'required', 
            'category' => 'required', 
            'returnproduct' => 'required', 
            'description' => 'required', 
        ]);

        if ($validator->fails()) {
            return redirect('/sell-product')
                        ->withErrors($validator)
                        ->withInput();
        }
        $x = new Products();
        $x->user_id  = $request->user_id;
        $x->category_id  = $request->category;
        $x->product_name  = $request->product_name;
        $x->product_description  = $request->description;
        $x->price  = $request->price;
        $x->payment_method  = $request->payment;
        $x->return_item  = $request->returnproduct;
        $x->location  = $request->location;
        $x->status = '0';
        $x->save();

        $files = $request->file('files');
        if($request->hasfile('files')){ 
            $destinationPath = public_path().'/uploads/products';
            foreach($files as $file){
                $image = new Images;
                $filename = \Carbon\Carbon::now()->timestamp.$file->getClientOriginalName();
                $file->move($destinationPath,$filename);
                $image->photo = $filename;
                $image->product_id = $x->id;
                $image->save();
                log::info($file);
            } 
        } 
    }
}