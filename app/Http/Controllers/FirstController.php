<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        return view("contact");

    }
    public function index_about()
    {
        // return view('about',['hi'=>'Atik']);
        return view('about',['hi'=>'A']);
    }
    public function form_index(Request $request)
    {
        //dd($request->all());
        $data = array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['token']=$request->_token;
        
        return redirect()->back()->with('status', 'Profile updated!');
        

        
    }
}
