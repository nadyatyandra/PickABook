<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourierController extends BaseController
{
    public function pickup(){
        $userId = Auth::user()->id;
        $summary = OrderHeader::where('memberId', '=', $userId, 'and')->where('statusId', 1)->first();
        return view('pickup', compact('summary'));
    }

    public function checkout(){

    }
}
