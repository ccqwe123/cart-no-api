<?php

namespace App\Http\Controllers;

use App\User;
use App\Roles;
use App\Images;
use App\UserRoles;
use App\Products;
use App\Locations;
use App\Category;
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
use Illuminate\Support\Facades\Redirect;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Products::with('images')

                ->get();
        $locations = Locations::orderBy('state','desc')->get();
        $category = Category::get();
        return view("user-profile.product_list",[
            'products'=>$products,
            'locations'=>$locations,
            'category'=>$category,
        ]);
        // return view("user-profile.product_list",['products'=>$products]);
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
        $locations = Locations::orderBy('state','desc')->get();
        $category = Category::get();
        return view("products.add_product",['locations'=>$locations,'category'=>$category,]);
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
        $product = Products::with('images')
                ->where('id',$id)
                ->get();
        $locations = Locations::orderBy('state','desc')->get();
        $category = Category::get();
        return view("products.edit_product",[
            'product'=>$product,
            'locations'=>$locations,
            'category'=>$category,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'product_name' => 'required|max:20|min:3',    
            'price' => 'required|max:100|min:1',    
            'location' => 'required', 
            'payment' => 'required', 
            'category' => 'required', 
            'returnproduct' => 'required', 
            'description' => 'required', 
        ]);

        if ($validator->fails()) {
            return redirect('/products/'.$request->product_id.'/edit')
                        ->withErrors($validator)
                        ->withInput();
        }
        $x = Products::find($request->product_id);
        $x->category_id = $request->category;
        $x->product_name = $request->product_name;
        $x->product_description = $request->description;
        $x->price = $request->price;
        $x->payment_method = $request->payment;
        $x->return_item = $request->returnproduct;
        $x->location = $request->location;
        $x->address = $request->address;
        $x->latitude = $request->latitude;
        $x->longitude = $request->longitude;
        $x->update();

       
        $files = $request->file('files');
        log::info($files);
        if(count($files) > 0)
        {
            $files = $request->file('files');
            if($request->hasfile('files')){ 
                DB::table('images')
                ->where('product_id',$request->product_id)
                ->delete();
                $destinationPath = public_path().'/uploads/products';
                foreach($files as $file){
                    $image = new Images;
                    $filename = \Carbon\Carbon::now()->timestamp.$file->getClientOriginalName();
                    $file->move($destinationPath,$filename);
                    $image->photo = $filename;
                    $image->product_id = $x->id;
                    $image->save();
                }
            }
        }else
        {
             
        }
        return redirect()->back()->with('flash_message', 'Product Updated!!');
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
            'location' => 'required', 
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
        $x->address = $request->address;
        $x->longitude = $request->longitude;
        $x->latitude = $request->latitude;
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
            } 
        } 
        return Redirect::back()->withErrors(['flash_success', 'The Message']);
    }
}