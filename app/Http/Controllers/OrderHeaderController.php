<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderHeaderController extends Controller
{
    public function manageOrder(){
        return view('manageOrder');
    }
}
