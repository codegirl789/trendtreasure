<?php

namespace App\Livewire;

use App\Models\product;
use App\Models\User;
use Livewire\Component;

class Search extends Component
{
    public $search;
    public $count = 0;
    public $products;
    public $flag = 0;

    public function increment()
    {
        return $this->count++;
    }

    public function searchForm()
    {
        if ($this->search <> '') {
            $this->products = product::where('name', 'like', '%' . $this->search . '%')->take(5)->latest()->get();
        } else {
            $this->products = '';
        }
    }
    public function updatedSearch($value)
    {
        if ($value === '') {
            $this->products = '';
        }
    }

    public function updatingSearch($value)
    {
        if ($value <> '') {
            $this->products = product::where('name', 'like', '%' . $value . '%')->take(5)->latest()->get();
        } else {
            $this->products = '';
        }
    }



    public function render()
    {
        return view('livewire.search');
    }
}
