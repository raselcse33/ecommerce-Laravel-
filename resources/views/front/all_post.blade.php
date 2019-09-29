@extends('front.layouts.main')

@section('content')
<!--content-->
<div class="product">
    <div class="container">
        <div class="spec ">
            <h3>Latest Products</h3>
            <div class="ser-t">
                <b></b>
                <span><i></i></span>
                <b class="line"></b>
            </div>
        </div>
        <div class=" con-w3l">
            @foreach($posts as $post)
            <div class="col-md-3 pro-1">
                <div class="col-m">
                    <a href="#" data-toggle="modal" data-target="" class="offer-img">
                        <img style="height: 140px" width="140px" src="{{asset('public/images/post/'.$post->image)}}" class="img-responsive" alt="">
                        <!-- <div class="offer">
                            <p><span>20% off</span></p>
                        </div> -->
                    </a>
                    <div class="mid-1">
                        <div class="women">
                            <h6><a href="single.html">{{$post->title}}</a></h6>
                        </div>
                        <div class="mid-2">
                            {{-- <p><label>$2.00</label><em class="item_price">$1.50</em></p> --}}
                            <p>TK {{$post->price}}.00</p>
                            <p>{{ Str::words($post->content, 5)}}</p>
                            <div class="block">
                                <div class="starbox small ghosting"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="add">
                            <button class="btn btn-danger my-cart-btn my-cart-b " data-id="1" data-name="Moong" data-summary="summary 1" data-price="{{-- {{$post->price}} --}}" data-quantity="1" data-image="images/of.png">Add to Cart</button>

                            <a href="{{route('details.page',['id'=>$post->id])}}" class="btn btn-success my-cart-btn  ">View</a>
                        </div>

                    </div>
                </div>
            </div>
            @endforeach
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
