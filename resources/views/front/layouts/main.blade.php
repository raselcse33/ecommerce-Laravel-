<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$basicSetting->name}}</title>
    <link rel="shortcut icon" href="{{asset('public/images/setting/icon/'.$basicSetting->icon)}}" />
    <link rel="stylesheet" href="{{asset('public/users/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/users/css/mdb.min.css')}}">
    <link rel="stylesheet" href="{{asset('public/users/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('public/users/css/Footer-with-social-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/users/fontawesome-5.10/css/all.css')}}">

    <script src="{{asset('public/users/fontawesome-5.10/js/all.js')}}"></script>
    <script src="{{asset('public/users/js/jquery-3.4.1.min.js')}}"></script>
</head>

<body>

    <!-- Central Modal Small -->
    <div class="modal fade" id="centralModalLg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">

        <!-- Change class .modal-sm to change the size of the modal -->
        <div class="modal-dialog modal-lg" role="document">


            <div class="modal-content">
                <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row p-4">
                        <div class="col-md-6" style="max-height: 300px">
                            <img src="./img/products/seed3.jpg" alt="" style="height: 100%;">
                        </div>
                        <div class="col-md-6 d-block">
                            <h4 class="my-2">Very healthy essential vegetable seeds - hybrid</h4>
                            <p class="small font-weight-light">Weight: 100 gm</p>
                            <h4 class="my-3">290 Tk</h4>

                            <div class="d-inline-flex align-self-center w-100 justify-content-center my-2">
                                <div class="mx-1 shopping-cart-plus-minus-button"><i
                                        class="fas fa-minus-circle fa-2x"></i></div>
                                <input class="mx-1 text-center w-50" type="number" value="1" min="1"
                                    class="form-control">
                                <div class="mx-1 shopping-cart-plus-minus-button"><i
                                        class="fas fa-plus-circle fa-2x"></i></div>
                            </div>
                            <button class="add-to-cart-btn btn">Add To Cart</button>

                            <div class="mt-4">
                                <span class="font-weight-bold">Description: </span> <br>
                                Lorem is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s, when an unknown printer
                                took a galley of type and scrambled it to make a type specimen book. It has survived not
                                only five centuries, but also the leap into electronic typesetting, remaining
                                essentially unchanged. It was popularised in the 1960s with the release of Letraset
                                sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Central Modal Small -->


    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark p-0" style="background-color: #666; box-shadow: 0 0 0 !important">
        <!-- Navbar brand -->
        <a class="navbar-brand" href="{{url('/')}}">Majhi Logo</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse p-1" id="basicExampleNav">
            <ul class="navbar-nav ml-auto font-weight-bold">
                <li class="nav-item mx-3">
                    <a class="nav-link" href="#">Signin</a>
                </li>
                <div class="border-left border-warning d-flex flex-column justify-content-center m-0 px-3"
                    style="background-color: rgba(0,0,0,.5); border-radius: 0 7px 7px 0;">                   
                    <li class="nav-item">
                        <a class="nav-link p-0 text-warning" href="#">21 items</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-0 text-warning" href="#">1543 Taka</a>
                    </li>
                </div>
            </ul>
        </div>
        <!-- Collapsible content -->
    </nav>
    <!--/.Navbar-->
    <div id="menubar" class="containter-fluid bg-warning">
        <div class="row">
            <div class="col py-2 px-4">
                <div class="d-flex justify-content-center align-items-center">
                    @foreach($categorys as $cat)
                    <a class="mx-2" href="{{route('products.bycategory',['id'=>$cat->id])}}">{{$cat->category_name}}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Body -->

    @yield('content')
   
    <!-- End Body -->
    <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 myCols">
                    <h5>Get started</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>About us</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 myCols">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="social-networks">
            <p>Connect Us on facebook</p>
            <a href="#" class="facebook"><i class="fab fa-facebook"></i></a>
        </div>
        <div class="footer-copyright">
            <p>© 2019 All rights reserved </p>
        </div>
    </footer>
    <script>
        function openModal(event, data) {
            // event.preventDefault();
            console.log(data);
            $('#centralModalLg').modal('show');
        }
    </script>

    <script src="{{asset('public/users/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('public/users/js/mdb.min.js')}}"></script>
    <script src="{{asset('public/users/js/popper.min.js')}}"></script>
</body>

</html>
