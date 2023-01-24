<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(Author::class, 'authorId', 'id');
    }
    
    public function publisher(){
        return $this->belongsTo(Publisher::class, 'publisherId', 'id');
    }

    public function category(){
        return $this->belongsToMany(Category::class, 'book_categories', 'bookId', 'categoryId');
    }

    public function library(){
        return $this->belongsToMany(Library::class, 'book_libraries', 'bookId', 'libraryId');
    }

    public function cartDetail(){
        return $this->hasMany(CartDetail::class, 'bookId', 'id');
    }

    public function group(){
        return $this->belongsToMany(Group::class, 'book_groups', 'bookId', 'groupId');
    }

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class, 'bookId', 'id');
    }
}
