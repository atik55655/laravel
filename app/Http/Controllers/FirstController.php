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
        return view('about');
    }
    public function form_index(Request $request)
    {
        dd($request->all());
    }
}
