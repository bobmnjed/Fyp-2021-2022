<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>Edit Product</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Products</a> 
                            </div>
                        </div>
                    </div>
                    <div class="panel-body" style="padding-left: 400px">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="from-horizontal" enctype="multipart/form-data" wire:submit.prevent="updateProduct">
                            <div class="form-group">
                                <label class="col-md-12 control-label">Product Name</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Product Name" class="from-control input-md" wire:model="name" wire:keyup="generateSlug" />
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Product Slug</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Product Slug" class="from-control input-md" wire:model="slug"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Short Description</label>
                                <div class="col-md-12">
                                    <textarea class="from-control" placeholder="Short Description"  wire:model="short_description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Description</label>
                                <div class="col-md-12">
                                    <textarea class="from-control" placeholder="Description" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Regular Price</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Regular Price" class="from-control input-md" wire:model="regular_price"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Sale Price</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Sale Price" class="from-control input-md" wire:model="sale_price"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">SKU</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="SKU" class="from-control input-md" wire:model="SKU"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Stock Status</label>
                                <div class="col-md-12">
                                    <select class="from-control" wire:model="stock_status">
                                        <option value="instock">InStock</option>
                                        <option value="outofstock">Out of Stock</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Featured</label>
                                <div class="col-md-12">
                                    <select class="from-control" wire:model="featured">
                                        <option value="0">No </option>
                                        <option value="1">Yes</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Quantity</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Quantity" class="from-control input-md" wire:model="quantity"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Product Image</label>
                                <div class="col-md-12">
                                    <input type="file"  class="input-file" wire:model="newimage"/>
                                    @if ($newimage)
                                    <img src = "{{ $newimage->temporaryUrl()}}" width = "120"/>
                                    @else
                                    <img src="{{asset('images')}}/{{$image}}" width="120" />
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label">Category</label>
                                <div class="col-md-12">
                                    <select class="from-control" wire:model="category_id">
                                        <option value="">Select an Category </option>
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-12 control-label"></label>
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>

                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>