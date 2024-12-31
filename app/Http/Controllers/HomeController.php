<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public function index(){
        return view('layouts.userpage');
    }

    public function books(){
        $books = Book::all();
        return view('layouts.books' ,compact('books'));
    }

    public function signIn(){
        return view('layouts.signIn');
    }
    
 public function about(){
        return view('layouts.about');
    }
}
