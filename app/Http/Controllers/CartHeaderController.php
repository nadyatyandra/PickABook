<?php

namespace App\Http\Controllers;

use App\Models\BookLibrary;
use App\Models\CartDetail;
use App\Models\CartHeader;
use App\Models\OrderDetail;
use App\Models\OrderHeader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartHeaderController extends BaseController
{
    public function cart(){
        $userId = Auth::user()->id;
        // $cartHeaderId = CartHeader::where('memberId', $userId)->pluck('id')->toArray();
        // $carts = CartDetail::whereIn('')
        // dd($cartHeaderId);
        $cartHeaders = CartHeader::where('memberId', $userId)->get();
        return view('cart', compact('cartHeaders'));
    }

    public function removeFromCart(Request $request){
        $userId = Auth::user()->id;
        $libraryId = $request['libraryId'];
        $bookId = $request['bookId'];

        $cartHeaderId = CartHeader::where('memberId', '=', $userId, 'and')->where('libraryId', $libraryId)->first()->id;

        CartDetail::where('cartHeaderId', '=', $cartHeaderId, 'and')->where('bookId', $bookId)->delete();

        // when no book remaining in cart detail for that library
        if(!CartDetail::where('cartHeaderId', $cartHeaderId)->first()){
            CartHeader::whereId($cartHeaderId)->delete();
        }

        return redirect()->route('cart');
    }

    public function checkout(Request $request){
        $userId = Auth::user()->id;
        $libraryId = $request['libraryId'];
        $cartHeaderId = CartHeader::where('memberId', '=', $userId, 'and')->where('libraryId', $libraryId)->first()->id;
        $cartDetails = CartDetail::where('cartHeaderId', $cartHeaderId)->get();

        // if there is something inside pickup
        if(OrderHeader::where('memberId', '=', $userId, 'and')->where('statusId', 1)->first()){
            return redirect()->back()->withErrors('Please specify pickup for your previous order before checking out again.');
        }

        // create new order header
        $orderHeader = new OrderHeader();
        $orderHeader->memberId = $userId;
        $orderHeader->date = date('Y-m-d');
        $orderHeader->statusId = 1;
        $orderHeader->libraryId = $libraryId;
        $orderHeader->save();

        $orderHeaderId = OrderHeader::latest()->first()->id;
        // move from cart details to order details
        foreach ($cartDetails as $key => $value) {
            $orderDetail = new OrderDetail();
            $orderDetail->orderHeaderId = $orderHeaderId;
            $orderDetail->bookId = $value->bookId;
            $orderDetail->save();

            //update library stock
            $stock = BookLibrary::where('bookId', '=', $value->bookId, 'and')->where('libraryId', $libraryId)->first()->stock;
            BookLibrary::where('bookId', '=', $value->bookId, 'and')->where('libraryId', $libraryId)->update([
                'stock' => $stock - 1
            ]);
        }
        // remove cart from db
        CartDetail::where('cartHeaderId', $cartHeaderId)->delete();
        CartHeader::where('memberId', '=', $userId, 'and')->where('libraryId', $libraryId)->delete();

        return redirect()->route('pickup');
    }
}
