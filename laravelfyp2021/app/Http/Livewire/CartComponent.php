<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
use CheckoutComponent;
class CartComponent extends Component
{
    public function increaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty + 1;
        Cart::update($rowId,$qty);
    }

    public function decreaseQuantity($rowId)
    {
        $product = Cart::get($rowId);
        $qty = $product->qty - 1;
        Cart::update($rowId,$qty);
    }

    public function destroy($rowId)
    {
        Cart::remove($rowId);
        session()->flash('success_message','Item has been removed');
    }

    public function destroyAll()
    {
        Cart::destroy();
    }

    public function checkout()
    {
        if(Auth::check())
        {
            return redirect()->route('checkout');
        }
        else
        {
            return redirect()->route('login');
        }
    }

    public function setAmountForCheckout()
    {
        if(!Cart::count()>0)
        {
            session()->forget('checkout');
            return;
        }

        session()->put('checkout',[
            'discount'=>0,
            'subtotal'=>Cart::subtotal(),
            'tax'=>Cart::tax(),
            'total'=>Cart::total()

        ]);
    }

    public function render()
    {
        $this->setAmountForCheckout();
        if(Auth::check())
        {
            Cart::store(Auth::user()->email);
        }
        return view('livewire.cart-component')->layout('layouts.base');
    }
}
