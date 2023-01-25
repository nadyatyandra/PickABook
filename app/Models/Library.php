<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    use HasFactory;

    public function book(){
        return $this->belongsToMany(Book::class, 'book_libraries', 'libraryId', 'bookId');
    }

    public function cartHeader(){
        return $this->hasMany(CartHeader::class, 'libraryId', 'id');
    }

    public function admin(){
        return $this->hasMany(Admin::class, 'libraryId', 'id');
    }

    public function orderHeader(){
        return $this->hasMany(orderHeader::class, 'libraryId', 'id');
    }

    public function bookLibrary(){
        return $this->hasMany(bookLibrary::class, 'libraryId', 'id');
    }
}
