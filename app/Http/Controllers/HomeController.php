<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.userpage');
    }

    public function books(){
        return view('layouts.books');
    }

    public function signIn(){
        return view('layouts.signIn');
    }
    
    public function about(){
        return view('layouts.about');
    }
}
