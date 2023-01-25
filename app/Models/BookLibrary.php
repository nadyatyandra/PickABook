<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookLibrary extends Model
{
    use HasFactory;

    protected $fillable = ['libraryId' , 'stock'];

    public function book(){
        return $this->belongsTo(Book::class, 'bookId', 'id');
    }

    public function library(){
        return $this->belongsTo(Library::class, 'libraryId', 'id');
    }
}
