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
    public $images;
    public $newimages;

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
         $this->images = explode(",",$product->images);
         $this->category_id = $product->category_id;
         $this->product_id = $product->id;

    }

    public function generateSlug()
    {
        $this->slug = Str::slug($this->name,'-');
    }

    public function updateProduct()
    {
        $product = Product::find($this->product_id);

        
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description = $this->short_description;
        $product->description = $this->description;
        $product->regular_price = $this->regular_price;
        $product->sale_price = $this->sale_price;
        $product->SKU = $this->SKU;
        $product->stock_status = $this->stock_status;
        $product->featured = $this->featured;
        $product->quantity = $this->quantity;
        if($this->newimage)
        {
            unlink('images/products'.'/'.$product->image);
            $imageName = Carbon::now()->timestamp. '.' .$this->newimage->extension();
            $this->newimage->storeAs('products',$imageName);
            $product->image = $imageName;
        }
        if($this->newimages)
        {
            if($product->images)
            {
                $images = explode(",",$product->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/products'.'/'.$image);
                    }
                }
            }
            $imagesname = '';
            foreach($this->newimages as $key=>$image)
            {
                $imgName = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('products',$imgName);
                $imagesname = $imagesname . ',' . $imgName; 
            }
            $product->images = $imagesname;
        }
        
        $product->category_id = $this->category_id;
        $product->save();
        session()->flash('message','Product Updated Successfully!');
    }


    public function render()
    {
        $categories= Category::all();
        return view('livewire.admin.admin-edit-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}
