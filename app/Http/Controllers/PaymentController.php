<?php

namespace App\Http\Controllers;

use App\Models\CartItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function checkout()
{
    $cartItems = CartItem::where('user_id', Auth::id())->get();
    $total = 0;
    foreach ($cartItems as $item) {
        $subtotal = $item->product->price * $item->quantity;
        $total += $subtotal;
    }

    return view('checkout', compact('cartItems', 'total'));
}




}
