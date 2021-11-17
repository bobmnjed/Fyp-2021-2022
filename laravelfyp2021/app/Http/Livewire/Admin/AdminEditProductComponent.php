<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

use App\Models\Category;
use\App\Models\Product;
use illuminate\support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $newimage;
    public $product_id;

    public function mount($product_slug)
    {
         $product = Product::where('slug', $product_slug)->first();

         $this->name = $product->name;
         $this->slug = $product->slug;
         $this->short_description = $product->short_description;
         $this->description = $product->description;
         $this->regular_price = $product->regular_price;
         $this->sale_price = $product->sale_price;
         $this->SKU = $product->SKU;
         $this->stock_status = $product->stock_status;
         $this->featured = $product->featured;
         $this->quantity = $product->quantity;
         $this->image = $product->image;
         $this->category_id = $product->category_id;
         $this->product_id = $product->id;

    }


    public function render()
    {
        return view('livewire.admin.admin-edit-product-component')->layout('layouts.base');
    }
}
