<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourierController extends BaseController
{
    public function pickup(){
        $userId = Auth::user()->id;
        $cartHeaders = CartHeader::where('memberId', $userId)->get();
        return view('pickup');
    }
}
