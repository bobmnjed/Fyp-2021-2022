<?php

namespace App\Http\Livewire;

use Livewire\Component;
use\Livewire\WithPagination;
use\App\Models\Product;

class PhonebrandsComponent extends Component
{
    public function render()
    {
        $products = Product::paginate(50);
        return view('livewire.phonebrands-component',['products'=> $products])->layout('layouts.base');
    }
}
