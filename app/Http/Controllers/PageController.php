<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function notFound(){
        return view('notFound');
    }

    public function landingPage(){
        return view('landing');
    }
}