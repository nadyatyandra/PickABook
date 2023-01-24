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
        // dd($summary);
        return view('pickup', compact('summary'));
    }

    public function checkout($orderId){
        // dd($orderId);
        OrderHeader::whereId($orderId)->update([
            'statusId' => 2
        ]);

        return redirect()->route('history');
    }
}
