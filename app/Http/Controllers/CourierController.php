<?php

namespace App\Http\Controllers;

use App\Models\Courier;
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

    public function checkout($orderId, Request $request){
        $courierId = NULL;
        if($request['options'] == 'Self Pick-Up'){
            $courierId = Courier::where('name', $request['options'])->first()->id;
        }
        else if($request['options'] == 'Courier'){
            $name = $request['courier'];
            $courierId = Courier::where('name', $name)->first()->id;
        }
        else{
            $courierId = 999;
        }

        // dd($orderId);
        OrderHeader::whereId($orderId)->update([
            'statusId' => 2,
            'courierId' => $courierId
        ]);
        return redirect()->route('history');
    }
}
