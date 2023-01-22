<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends BaseController
{
    public function home(){
        return view('home');
    }

    // param boleh id, boleh ISBN. ISBN might be better.
    public function bookDetail($id){
        $book = Book::whereId($id)->first();

        // book id not found.
        if($book == NULL){
            return redirect()->route('home');
        }
        return view('bookDetail', compact('book'));
    }

    public function category(){
        return view('category');
    }

    public function getBookDetail(){
        return view('manageBook');
    }
}
