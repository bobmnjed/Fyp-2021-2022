

<main id="main" class="main-site">
    
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Product Categories</h2>
                        

                    </div>
                </div>
            </div>
        </div>
    </div> 

    <div class="wrap-shop-control">

        <h1 class="shop-title">Result</h1>
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
        @if($products->count()>0)
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach ($products as $product )
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <a  href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                        <figure><img src="{{asset ('images/products')}}/{{$product->image}}" alt="{{$product->name}}" /></figure></a>
                        <h3>$<strong class="red">{{$product->regular_price}}</strong></h3>
                        <span>{{$product->name}}</span>
                        <i><img src="{{asset ('images/star.png')}}"/></i>
                        <i><img src="{{asset ('images/star.png')}}"/></i>
                        <i><img src="{{asset ('images/star.png')}}"/></i>
                        <i><img src="{{asset ('images/star.png')}}"/></i>
                    </div>
                </div>
                @endforeach
                </div>
                <div style="padding-left:500px"> {{$products->links()}}</div>
            </div>
        </div>
        @else 
        <p style="padding-top: 30px;">No Products</p>
        @endif
    </div>
</main>
<!-- end brand -->