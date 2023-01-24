<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookLibrary;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends BaseController
{
    public function deleteBook($bookId){
        $userId = Auth::user()->id;
        $libraryId = Admin::where('userId', $userId)->first()->libraryId;
        BookLibrary::where('bookId', '=', $bookId, 'and')->where('libraryId', $libraryId)->delete();

        return redirect()->route('manageBook');
    }


    public function edit($bookId){

        $currBook = Book::where('bookId', $bookId)->first()->bookId;
        $authors = Author::get(); // Eloquent?
        $publishers = Publisher::get();
        $languages = Language::get();
        $categories = Category::get();
        return view('updateBook', compact('currBook', 'publishers', 'languages', 'categories', 'authors'));

    }

    public function updateBook(){


    }

    public function create(){
    
        $authors = Author::get(); // Eloquent?
        $publishers = Publisher::get();
        $languages = Language::get();
        $categories = Category::get();

        return view('insertBook', compact('publishers', 'languages', 'categories', 'authors'));
    }


    public function insertBook(Request $request){

        $image = $request->file('inputImage');
        $imageName = $image->getClientOriginalName();

        // Please check path
        Storage::putFileAs('public/images/books/', $image, $imageName);
        $inputPhotopath = $imageName;

        $newBook = new Book();
        $newBook->authorId = $request->inputAuthor;
        $newBook->publisherId = $request->inputPublisher;
        $newBook->title = $request->inputTitle;
        $newBook->ISBN = $request->inputISBN;
        $newBook->photoPath = $inputPhotopath;
        $newBook->synopsis = $request->inputSynopsis;
        $newBook->languageId = $request->inputLanguage;
        $newBook->publishedYear = $request->inputPublishedYear;
        $newBook->weight = $request->inputWeight;
        $newBook->save();

        //add new BookId to a library?

        //add new BookId to a category?

        return redirect()->route('manageBook');

    }
}
