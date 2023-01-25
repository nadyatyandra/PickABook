<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Library;
use App\Models\OrderDetail;
use App\Models\OrderHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderHeaderController extends Controller
{
    public function manageOrder(){
        $adminId = Auth::user()->id;
        $libraryId = Admin::where('userId', $adminId)->first()->libraryId;
        $orders = OrderHeader::where('libraryId', $libraryId)->get();
        return view('manageOrder', compact('orders'));
    }

    public function orderDetail($orderHeaderId, $bookId){
        $order = OrderDetail::where('orderHeaderId', '=', $orderHeaderId, 'and')->where('bookId', $bookId)->first();
        return view('orderDetail', compact('order'));
    }

    public function updateStatus($orderHeaderId){
        $status = OrderHeader::whereId($orderHeaderId)->first()->statusId;
        OrderHeader::whereId($orderHeaderId)->update([
            'statusId' => $status + 1
        ]);
        return redirect()->route('manageOrder');
    }
}
