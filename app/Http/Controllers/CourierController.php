<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourierController extends BaseController
{
    public function pickup(){
        return view('pickup');
    }
    public function checkout(){
        
    }
}
