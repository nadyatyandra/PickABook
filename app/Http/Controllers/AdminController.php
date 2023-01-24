<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Author;
use App\Models\Book;
use App\Models\BookCategory;
use App\Models\BookLibrary;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function updateBook(Request $request, $bookId){

        $image = $request->file('inputImage');
        $imageName = $image->getClientOriginalName();

        // Please check path
        Storage::putFileAs('public/images/books/', $image, $imageName);
        $inputPhotopath = $imageName;

        Book::where('id', $bookId) //Eloquent?
        ->update([
            'authorId' => $request->inputAuthor,
            'publisherId' => $request->inputPublisher,
            'title' => $request->inputTitle,
            'ISBN' => $request->inputISBN,
            'photoPath' => $inputPhotopath,
            'synopsis' => $request->inputSynopsis,
            'languageId' => $request->inputLanguageId,
            'publishedYear' => $request->inputPublishedYear,
            'weight' => $request->inputWeight,
        ]);

        BookCategory::where('bookId', $bookId)
        ->first()
        ->update([
            'categoryId' => $request->categoryId
        ]);

        return redirect()->route('manageBook');

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


        //add new BookId to a category?

        $bookId = Book::latest()->first()->id;
        $newBookCategories = new BookCategory();
        $newBookCategories->bookId = $bookId;
        $newBookCategories->categoryId = $request->categoryId;
        $newBookCategories->save();

        return redirect()->route('manageBook');

    }

    public function addToLibrary(Request $request){

        $request->validate([
            'ISBN' => 'required|min:13|max:13|unique:books',
            'stock' => 'required|min:1',
        ]); //Validate ISBN

        $currBook = Book::where('ISBN', $request->input('ISBN'))
        ->first;

        $userId = Auth::user()->id;
        $libraryId = Admin::where('userId', $userId)->first()->libraryId;

        $newBookLibrary = new BookLibrary();
        $newBookLibrary->bookId = $currBook->bookId;
        $newBookLibrary->libraryId = $libraryId;
        $newBookLibrary->stock = $request->input('stock');
        $newBookLibrary->save(); //Add to Library

        return redirect()->route('manageBook');

    }

}