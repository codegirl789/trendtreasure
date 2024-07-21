<?php

namespace App\Livewire;

use Livewire\Component;

class ProductActions extends Component
{
    public $number = 1;

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

    public function render()
    {
        return view('livewire.product-actions');
    }
}
