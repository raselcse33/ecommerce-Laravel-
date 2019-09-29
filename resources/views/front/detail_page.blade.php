
@extends('front.layouts.main')

@section('content')
<!--banner-->
<div class="banner-top">
    <div class="container">
        <h3 >Lorem</h3>
        <h4><a href="index.html">Home</a><label>/</label>Lorem</h4>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="single">
    <div class="container">
        <div class="single-top-main">
            <div class="col-md-5 single-top">
                <div class="single-w3agile">

                    <div id="picture-frame">
                        <img style="height: 140px;width: 140px" src="{{asset('public/images/post/'.$post->image)}}" data-src="images/si-1.jpg" alt="" class="img-responsive"/>
                    </div>
                    <script src="js/jquery.zoomtoo.js"></script>
                    <script>
                        $(function () {
                            $("#picture-frame").zoomToo({
                                magnify: 1
                            });
                        });
                    </script>



                </div>
            </div>
            <div class="col-md-7 single-top-left ">
                <div class="single-right">
                    <h3>{{$post->title}}</h3>


                    <div class="pr-single">
                        <p class="reduced ">TK {{$post->price}}</p>
                    </div>
                    <div class="block block-w3">
                        <div class="starbox small ghosting"> </div>
                    </div>
                    <p class="in-pa">{{$post->content}}</p>

                    <ul class="social-top">
                        <li><a href="#" class="icon facebook"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
                        {{-- <li><a href="#" class="icon pinterest"><i class="fa fa-pinterest-p" aria-hidden="true"></i><span></span></a></li>
                        <li><a href="#" class="icon dribbble"><i class="fa fa-dribbble" aria-hidden="true"></i><span></span></a></li> --}}
                         @if(Session::get('id'))
                        <li><a href="{{route('store.wishlist',['id'=>$post->id])}}" class="icon heart"><i class="fa fa-heart" aria-hidden="true"></i><span></span></a></li>
                        @else
                         <li><a href="{{route('user-login')}}" class="icon heart"><i class="fa fa-heart" aria-hidden="true"></i><span></span></a></li>
                        @endif
                    </ul>
                    <div class="add add-3">
                         <a href="{{route('add.card',['id'=>$post->id])}}" class="btn btn-success my-cart-btn">Add Card</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>	
    </div>
</div>
<!---->
<div class="content-top offer-w3agile">
</div>
<!--footer-->
@endsection
