

<main id="main" class="main-site">
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Shop</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    
    <div class="wrap-shop-control">

        <h1 class="shop-title">Shop Products</h1>
        <div class="wrap-right">
            <div class="sort-item orderby ">
                <select name="orderby" class="use-chosen" wire:model="sorting">
                    <option value="default" selected="selected">Default sorting</option>
                    <option value="date">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                </select>
            </div>

            <div class="sort-item product-per-page">
                <select name="post-per-page" class="use-chosen" wire:model="pagesize">
                    <option value="12" selected="selected">12 per page</option>
                    <option value="16">16 per page</option>
                    <option value="18">18 per page</option>
                    <option value="21">21 per page</option>
                    <option value="24">24 per page</option>
                    <option value="30">30 per page</option>
                </select>
            </div>

            <div class="change-display-mode">
                <a href="#" class="grid-mode display-mode active"><i class="fa fa-th"></i>Grid</a>
                <a href="list.html" class="list-mode display-mode"><i class="fa fa-th-list"></i>List</a>
            </div>

        </div>
    <div class="brand-bg">
        <div class="container">
            <div class="dropdown" style="margin-bottom: 30px">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: red">
                  Product Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                @foreach ($categories as $category)
                  <a class="dropdown-item" href="{{route('product.categories',['category_slug'=>$category->slug])}}">{{$category->name}}</a>
                @endforeach 
                </div>
              </div>
            <div class="row">
                @foreach ($products as $product )
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <a  href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                        <figure><img src="{{asset ('images/products')}}/{{$product->image}}" alt="{{$product->name}}" /></figure></a>
                        <h3>$<strong class="red">{{$product->regular_price}}</strong></h3>
                        <span>{{$product->name}}</span>
                        <div class="product-rating">
                            <style>
                                .color-gray{
                                    color: #e6e6e6 !important;
                                }
                            </style>
                            @php
                             $avgrating = 0;   
                            @endphp
                            @foreach ($product->orderItems->where('rstatus',1) as $orderItem)
                                @php
                                $avgrating = $avgrating + $orderItem->review->rating;
                                @endphp
                            @endforeach
                            @for($i=1;$i<=5;$i++)
                                @if($i<=$avgrating)
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                @else
                                    <i class="fa fa-star color-gray" aria-hidden="true"></i>
                                @endif
                            @endfor
                        </div>
                    </div>
                </div>
                @endforeach
                </div>
               <div style="padding-left:500px"> {{$products->links()}}</div>
            </div>
        </div>
    </div>
</main>
<!-- end brand -->