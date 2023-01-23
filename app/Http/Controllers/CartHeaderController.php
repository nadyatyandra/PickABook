<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use App\Models\CartHeader;
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

        return redirect()->route('cart');
    }
}
