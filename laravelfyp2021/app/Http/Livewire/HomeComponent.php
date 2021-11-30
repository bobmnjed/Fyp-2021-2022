<?php

namespace App\Http\Livewire;

use Livewire\Component;
use\Livewire\WithPagination;
use\App\Models\Product;
use\App\Models\Setting;
use Cart;
use Illuminate\Support\Facades\Auth;


class HomeComponent extends Component
{
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id, $product_name,1,$product_price)-> associate('App\Models\Product');
        session()->flash('success_message','Item Successfuly Added in Cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        $setting = Setting::find(1);

        if(Auth::check())
        {
            Cart::restore(Auth::user()->email);
        }
        return view('livewire.home-component',['products'=> $products],['setting'=>$setting])->layout('layouts.base');
    }
}
