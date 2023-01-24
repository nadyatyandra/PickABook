<?php

namespace App\Http\Controllers;

use App\Models\OrderHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderHeaderController extends Controller
{
    public function manageOrder(){
        $orders = DB::table('order_headers')->get();
        return view('manageOrder', compact('orders'));
    }

    public function orderDetail($id){
        $order = OrderHeader::findOrFail($id);
        return view('orderDetail', compact('order'));
    }
}
