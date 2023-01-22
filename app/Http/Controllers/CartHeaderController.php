<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartHeaderController extends BaseController
{
    public function cart(){
        return view('cart');
    }
}
