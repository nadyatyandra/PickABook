<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;

    public function cartHeader(){
        return $this->belongsTo(CartDetail::class, 'cartHeaderId', 'id');
    }

    public function book(){
        return $this->belongsTo(Book::class, 'bookId', 'id');
    }
}
