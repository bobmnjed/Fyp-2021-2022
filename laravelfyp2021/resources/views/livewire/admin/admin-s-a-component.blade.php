<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                <h3>All Reviews</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="#" wire:click.prevent="export" class="btn btn-primary pull-right" style="margin-right: 4px">Export Reviews</a>
                            </div>
                        </div>
                        
                    </div>
                    <div class="panel-body">
                        @if (Session::has('order_message'))
                            <div class="alert alert-success" role="alert">{{Session::get('order_message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Review Id</th>
                                    <th>Rating</th>
                                    <th>Comment</th>
                                    <th>Order Item ID</th>
                                    <th>Review Date</th>
                                    <th colspan="2" class="text-center">Action</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($reviews as $review)
                                <tr>
                                    <td>{{$review->id}}</td>
                                    <td>{{$review->rating}}</td>
                                    <td>{{$review->comment}}</td>
                                    <td>{{$review->order_item_id}}</td>
                                    <td style="color: black">{{$review->created_at->format('d F Y g:i A')}}</td>
                                    <td>
                                    <a href="#"  wire:click.prevent="deleteReview({{$review->id}})" style="margin-left: 10px;"><i class="fa fa-times fa-2px text-danger"></i></a> 
                                    </td>   
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{$reviews->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
