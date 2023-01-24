<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\BookLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends BaseController
{
    public function deleteBook($bookId){
        $userId = Auth::user()->id;
        $libraryId = Admin::where('userId', $userId)->first()->libraryId;
        BookLibrary::where('bookId', '=', $bookId, 'and')->where('libraryId', $libraryId)->delete();

        return redirect()->route('manageBook');
    }

    public function updateBook(){

    }

    public function insertBook(){

    }
}
