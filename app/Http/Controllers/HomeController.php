<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Category;
use App\Locations;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::get();
        return view('home.index',['category'=>$category]);
    }
    public function errorpage()
    {
        return view('oops');
    }
     public function selling()
    {
        $locations = Locations::orderBy('state','desc')->get();
        $category = Category::get();
        return view('selling.product_list',['category'=>$category,'locations'=>$locations]);
    }
     public function buying()
    {
        $category = Category::get();
        return view('buying.buy_list',['category'=>$category]);
    }
}
