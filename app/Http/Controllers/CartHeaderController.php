<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartHeaderController extends Controller
{
    public function cart(){
        return view('cart');
    }
}