<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function home(){
        return view('home');
    }

    public function bookDetail(){
        return view('bookDetail');
    }

    public function category(){
        return view('category');
    }

    public function getBookDetail(){
        return view('manageBook');
    }
}
