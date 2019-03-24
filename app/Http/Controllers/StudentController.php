<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Http\Requests;
use Log;
// use \Statickidz\GoogleTranslate;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $variable = Student::get();

        $source = 'ph';
        $target = 'en';
        $text = 'ano ang sinabi?';
        $trans = new GoogleTranslate();
        $result = $trans->translate($source, $target, $variable);
        return view('student_list',['variable'=>$variable]);
    }
    public function localedisplay($abc){
        // $variable = Student::get();
        
        // $source = 'ph';
        // $target = $abc;
        // $text = $variable[0]->firstname;
        // $trans = new GoogleTranslate();
        // $result = $trans->translate($source, $target, $text);
        // return view('student_list',['variable'=>$variable, 'result' => $result]);
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
        //
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
