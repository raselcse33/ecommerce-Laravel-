@extends('front.layouts.main')

@section('content')

<!--content-->
    <div class="container ">
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
                        @foreach($latests_posts as $post)
                        <div class="col-md-3 pro-1">
                            <div class="col-m">
                                <a href="#" data-toggle="modal" data-target="" class="offer-img">
                                    <img style="height: 140px; width: 140px" src="{{asset('public/images/post/'.$post->image)}}" class="img-responsive" alt="">
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
                                                    <h6>TK {{$post->price}}.00</h6>
                                                    <p>{{ Str::words($post->content, 5)}}</p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"> </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="add">
                                                 <a href="{{route('add.card',['id'=>$post->id])}}" class="btn btn-success my-cart-btn  ">Add Card</a>

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
                 </div>
                     @endsection
