@extends('front.layouts.main')

@section('content')
	<div class="containter">
        <div class="row justify-content-center">
            <div class="col-sm-10">
                <div class="row bg-white mt-4">
                    <div class="col-md-3 p-3">
                        <h5 class="font-weight-bold">Fashion</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Sub Category 1</li>
                            <li class="list-group-item">Sub Category 2</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>

                    </div>
                    <div class="col-md-7">
                        <div class="row">
                            <div class="col-12 py-3 d-flex justify-content-between">
                                <h5 class="font-weight-bold">Fashion</h5>
                            </div>
                            <div class="col-12 border-bottom p-3 my-3">
                                SubCategory 1
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid""
                                                src=" ./img/products/dumur.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px"
                                        src="./img/products/172594468-56a793465f9b58b7d0ebd64b.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">Very Simple Seed
                                    </p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px"
                                        src="./img/products/g-neuron-56a792cd5f9b58b7d0ebd043.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px" src="./img/products/kumra.jpeg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 border-bottom p-3 my-3">
                                SubCategory 2
                            </div>
                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid""
                                                    src=" ./img/products/dumur.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px"
                                        src="./img/products/172594468-56a793465f9b58b7d0ebd64b.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">Very Simple Seed
                                    </p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px"
                                        src="./img/products/g-neuron-56a792cd5f9b58b7d0ebd043.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px" src="./img/products/kumra.jpeg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px" src="./img/products/sd.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>

                            <div class="col-sm-4 col-md-4">
                                <div
                                    class="product-container d-flex flex-column justify-content-center align-items-center p-3">
                                    <img onclick="openModal(this)" class="text-center img-fluid"
                                        style="max-height: 300px" src="./img/products/seed in hand.jpg" alt="">
                                    <p onclick="openModal(this)" class="text-center mt-2 product-name">This is a nice
                                        product
                                        name that can be two lines in length</p>
                                    <h5 class="product-price">105 Taka</h5>
                                    <button class="add-to-cart-btn btn mt-auto">Add To Cart</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection