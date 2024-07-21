<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class YourCartNavbar extends Component
{
    public $cartCount;

    public function mount()
    {
        if (Auth::user()) {
            $this->cartCount = Auth::user()->Carts->count();
        }
    }

    protected $listeners = ['cartUpdated'];

    public function cartUpdated()
    {
        $this->cartCount = Auth::user()->Carts->count();
    }


    public function render()
    {
        return view('livewire.your-cart-navbar');
    }
}
