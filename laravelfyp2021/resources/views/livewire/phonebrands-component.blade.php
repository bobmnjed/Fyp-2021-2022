
<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>iPhone</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand -->
<div class="brand">
    <div class="container"></div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach ($products as $product )
        
    
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <a  href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                        <figure><img src="{{asset ('images')}}/{{$product->image}}" alt="{{$product->name}}" /></figure></a>
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

                </div>
            </div>
        </div>
                

<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Samsung</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand -->
<div class="brand">
    <div class="container">

    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach ($products as $product )
        
    
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <a  href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                        <figure><img src="{{asset ('images')}}/{{$product->image}}" alt="{{$product->name}}" /></figure></a>
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
                </div>
               
                
        </div>
    </div>


<div class="brand_color">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Huawei</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- brand -->
<div class="brand">
    <div class="container">

    </div>
    <div class="brand-bg">
        <div class="container">
            <div class="row">
                @foreach ($products as $product )
        
    
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box">
                        <a  href="{{route('product.details',['slug'=>$product->slug])}}" title="{{$product->name}}">
                        <figure><img src="{{asset ('images')}}/{{$product->image}}" alt="{{$product->name}}" /></figure></a>
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
                
               
        </div>
    </div>
</div>
<!-- end brand -->