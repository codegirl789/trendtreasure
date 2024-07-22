<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\PaymentDetail;
use Carbon\Carbon;
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

        $address = Address::where('user_id', '=', Auth::user()->id)->first();

        if ($address) {
            $address = Address::where('user_id', '=', Auth::user()->id)->first();
        } else {
            $address = null;
        }

        return view('frontend.checkout.index', compact('cartTotal', 'address'));
    }

    public function store(Request $request)
    {
        $cartTotal = 0;

        foreach (Auth::user()->Carts as $cart) {
            $cartTotal += $cart->total;
        }

        //Address
        $addressExists = Address::where('user_id', '=', Auth::user()->id)->first();

        if ($addressExists) {
            $addressExists = Address::where('user_id', '=', Auth::user()->id)->first();
        } else {
            $address = new Address();
        }

        $address = new Address();
        $address->user_id = Auth::user()->id;
        $address->country = $request->country;
        $address->address = $request->address;
        $address->apartment = $request->apartment;
        $address->city = $request->city;
        $address->state = $request->state;
        $address->pincode = $request->pincode;
        $address->phone = $request->phone;
        $address->save();

        // order

        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->total_price = $cartTotal;
        $order->order_approved_at = Carbon::now();
        $order->order_received_carrier_date == Carbon::now();
        $order->order_received_receiver_date == Carbon::now();
        $order->save();



        // order items
        foreach (Auth::user()->Carts as $key => $cart) {
            $order_items = new OrderItem();
            $order_items->user_id = Auth::user()->id;
            $order_items->product_id = $cart->product->id;
            $order_items->quantity = $cart->quantity;
            $order_items->save();
        }

        //parment_details
        $payment_details = new PaymentDetail();
        $payment_details->order_id = $order->id;
        $payment_details->amount = $cartTotal;
        $payment_details->status = 'Approved';
        $payment_details->payment_method = $request->payment;
        $payment_details->save();

        $cart = Cart::where('user_id', Auth::user()->id)->first();
        $cart->delete();

        foreach (Auth::user()->Carts as $key => $cart) {
            $cart->delete();
        }

        return redirect()->back();
    }
}
