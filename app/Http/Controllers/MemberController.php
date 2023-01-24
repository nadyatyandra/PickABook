<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MemberController extends BaseController
{
    public function history(){
        $userId = Auth::user()->id;
        $orders = OrderHeader::where('memberId', $userId)->get();
        return view('history', compact('orders'));
    }
}
