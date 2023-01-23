<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
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

    public function category($name){
        $category = Category::where('name', $name)->first();
        if($category == NULL){
            return redirect()->route('home');
        }

        $books = Book::whereHas('category', function($x) use ($name){
            $x->where('name', $name);
        })->orderBy('books.id')->get();
        return view('category', compact('books', 'name'));
    }

    public function getBookDetail(){
        return view('manageBook');
    }
}
