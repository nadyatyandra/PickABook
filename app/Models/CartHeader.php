<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartHeader extends Model
{
    use HasFactory;

    public function cartDetail(){
        return $this->hasMany(CartDetail::class, 'cartHeaderId', 'id');
    }

    public function library(){
        return $this->belongsTo(Library::class, 'libraryId', 'id');
    }
}
