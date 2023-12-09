<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControlIndex extends Controller
{
    //
    public function home(){
        return view ('home');
    }
    public function contact(){
        return view ('contact');
    }
    public function aboutus(){
        return view ('aboutus');
    }
    public function mvv(){
        return view ('MVV');
    }
}
