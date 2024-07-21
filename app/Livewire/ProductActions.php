<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ProductActions extends Component
{
    public $number = 1;
    public Product $product;

    public function increment()
    {
        $this->number++;
    }

    public function decrement()
    {
        if ($this->number <> 1) {
            $this->number--;
        } else {
            $this->number = 1;
        }
    }

    public function Addtocart()
    {
        $total = ($this->product->price * $this->number) - ($this->product->discount * $this->number);

        $cart = new Cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $this->product->id;
        $cart->total = $total;
        $cart->quantity = $this->number;
        $cart->save();

        $this->dispatch('cartUpdated', $this->number);
    }

    public function render()
    {
        return view('livewire.product-actions');
    }
}
