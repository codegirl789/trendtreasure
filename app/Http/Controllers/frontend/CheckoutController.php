<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index()
    {
        $cartTotal = 0;

        foreach (Auth::user()->Carts as $cart) {
            $cartTotal += $cart->total;
        }

        return view('frontend.checkout.index', compact('cartTotal'));
    }

    public function store(Request $request)
    {
        // Country,First Name,Last Name,Address,Apartment,City,State,Pincode,Phone Number,payment
        dd($request->all());
    }
}
