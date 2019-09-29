<html >
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content=""> 
        <!-- Mobile Metas -->
         <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}"> 
        <link rel="stylesheet" href="{{asset('public/admin/vendor/animate/animate.css')}}">

        <link rel="stylesheet" href="{{asset('public/admin/vendor/font-awesome/css/fontawesome-all.min.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/vendor/magnific-popup/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}"> 

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/css/theme.css')}}"> 

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{asset('public/admin/css/custom.css')}}">

		<!-- Head Libs -->
        <script async="" src="//www.google-analytics.com/analytics.js')}}"></script> 
        <script src="{{asset('public/admin/vendor/modernizr/modernizr.js')}}"></script>		
        <script src="{{asset('public/admin/master/style-switcher/style.switcher.localstorage.js')}}"></script> 

        <link rel="stylesheet" href="{{asset('public/admin/master/style-switcher/style-switcher.css')}}"/>
        <link rel="stylesheet/less" href="{{asset('public/admin/master/less/skin.less')}}"/>
        <link rel="stylesheet" href="{{asset('public/admin/master/style-switcher/bootstrap-colorpicker/css/bootstrap-colorpicker.css')}}"/> 
</head>
<body>
		<!-- start: page -->
    <section class="body-sign">
        <div class="center-sign">
            <div class="panel card-sign">
                <div class="card-title-sign mt-3 text-right">
                    <h2 class="title text-uppercase font-weight-bold m-0 text-success"><i class="fas fa-user mr-1"></i> Sign In</h2>
                </div>
                <div class="card-body">
                        {{Form::open(['method'=>'post','route'=>'login'])}}
                        <div class="form-group mb-3">
                                <label>Username</label>
                                <div class="input-group">
                                        <input name="email" type="email" class="form-control form-control-lg">
                                        <span class="input-group-append">
                                                <span class="input-group-text">
                                                        <i class="fas fa-user"></i>
                                                </span>
                                        </span>
                                        @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                </div>
                        </div>
                        <div class="form-group mb-3">
                                <div class="clearfix">
                                        <label class="float-left">Password</label>
                                </div>
                                <div class="input-group">
                                        <input name="password" type="password" class="form-control form-control-lg">
                                        <span class="input-group-append">
                                                <span class="input-group-text">
                                                        <i class="fas fa-lock"></i>
                                                </span>
                                        </span>
                                        @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-sm-8">
                                </div>
                                <div class="col-sm-4 text-right">
                                        <button type="submit" class="btn btn-success mt-2">Sign In</button>
                                </div>
                        </div>
                        {{Form::close()}}
                </div>
            </div>
        </div>
    </section>
		<!-- end: page -->

		<!-- Vendor -->
<script src="{{asset('public/admin/vendor/jquery/jquery.js')}}"></script>
<script src="{{asset('public/admin/vendor/jquery-browser-mobile/jquery.browser.mobile.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/jquery-cookie/jquery-cookie.js')}}"></script>		
 <script src="{{asset('public/admin/master/style-switcher/style.switcher.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/popper/umd/popper.min.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/bootstrap/js/bootstrap.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/common/common.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/nanoscroller/nanoscroller.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/magnific-popup/jquery.magnific-popup.js')}}"></script>		
 <script src="{{asset('public/admin/vendor/jquery-placeholder/jquery-placeholder.js')}}"></script>
<!-- Theme Base, Components and Settings -->
<!-- Theme Base, Components and Settings -->
<script src="{{asset('public/admin/js/theme.js')}}"></script> 
<!-- Theme Custom -->
<script src="{{asset('public/admin/js/custom.js')}}"></script> 
<!-- Theme Initialization Files -->
<script src="{{asset('public/admin/js/theme.init.js')}}"></script>
       </body> 
</html>
