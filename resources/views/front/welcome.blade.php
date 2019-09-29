@extends('front.layouts.main')

@section('content')

<div class="containter">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-8 ">
            <div class="row bg-white mt-0">
                <div class="col-12 p-0">
                    <div id="carouselExampleControls" class="carousel slide w-100" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" style="width: 100%"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(45).jpg"
                                alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                src="https://mdbootstrap.com/img/Photos/Slides/img%20(47).jpg"
                                alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                        data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                    data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</div>

<div class="containter">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-lg-8 ">
            <div class="row bg-white mt-4">
                <div class="col-12 py-3 d-flex justify-content-between">
                    <h5 class="font-weight-bold">All Products</h5>
                    <a href="#">
                        <h5 class="font-weight-bold">See More..</h5>
                    </a>

                </div>
                @foreach($random_product as $pro)
                <div class="col-sm-4 col-md-3">
                    <div class="product-container border d-flex flex-column justify-content-center align-items-center p-1 my-2 rounded">
                        <img onclick='openModal(<?php echo json_encode($pro); ?>, event)' class="text-center img-fluid"
                        src="{{asset('public/images/post/'.$pro->image)}}" alt="" />
                        <p onclick="openModal(this, <?php echo json_encode($pro); ?>)" class="text-center mt-2 product-name">{{$pro->title}}</p>
                        <h5 class="product-price">{{$pro->price}} Taka</h5>
                        <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row bg-white mt-4">
                <div class="col-12 py-3 d-flex justify-content-between">
                    <h5 class="font-weight-bold">Latest Products</h5>
                    <a href="#">
                        <h5 class="font-weight-bold">See More..</h5>
                    </a>

                </div>
                @foreach($latest_product as $pro)
                <div class="col-sm-4 col-md-3">
                    <div class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                        <img onclick="openModal(this)" class="text-center img-fluid""
                        src="{{asset('public/images/post/'.$pro->image)}}" alt="">
                        <p onclick="openModal(this)" class="text-center mt-2 product-name">{{$pro->title}}</p>
                        <h5 class="product-price">{{$pro->price}} Taka</h5>
                        <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row bg-white mt-4">
                <div class="col-12 py-3 d-flex justify-content-between">
                    <h5 class="font-weight-bold">Top Sell Products</h5>
                    <a href="#">
                        <h5 class="font-weight-bold">See More..</h5>
                    </a>

                </div>
                @foreach($latest_product as $pro)
                <div class="col-sm-4 col-md-3">
                    <div class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                        <img onclick='openModal(<?php echo json_encode($pro); ?>, event)' class="text-center img-fluid""
                        src="{{asset('public/images/post/'.$pro->image)}}" alt="">
                        <p onclick="openModal(this)" class="text-center mt-2 product-name">{{$pro->title}}</p>
                        <h5 class="product-price">{{$pro->price}} Taka</h5>
                        <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection
