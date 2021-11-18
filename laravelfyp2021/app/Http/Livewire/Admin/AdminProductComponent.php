<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use\Livewire\WithPagination;
use\App\Models\Product;
use App\Models\Category;
use Carbon\Carbon;
class AdminProductComponent extends Component
{
    public function deleteProduct($id)
    {
        $category = Product::find($id);
        $category->delete();
        session()->flash('message','Product is Deleted Successfully!');
    }
    use WithPagination;
    public function render()
    { 
        $products = Product::paginate(10);
        return view('livewire.admin.admin-product-component',['products'=>$products])->layout('layouts.base');
    }
}
