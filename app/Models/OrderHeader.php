<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderHeader extends Model
{
    use HasFactory;

    public function orderDetail(){
        return $this->hasMany(OrderDetail::class, 'orderHeaderId', 'id');
    }

    public function status(){
        return $this->belongsTo(Status::class, 'statusId', 'id');
    }

    public function library(){
        return $this->belongsTo(Library::class, 'libraryId', 'id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'memberId', 'id');
    }
}
