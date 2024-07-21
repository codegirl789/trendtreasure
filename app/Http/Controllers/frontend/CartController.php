<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartTotal = 0;

        foreach (Auth::user()->Carts as $cart) {
            $cartTotal += $cart->total;
        }

        return view('frontend.cart.index', compact('cartTotal'));
    }

    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        $cart->delete();

        return redirect()->back();
    }
}
