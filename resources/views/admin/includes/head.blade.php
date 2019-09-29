<!doctype html>
<!--<html class="fixed sidebar-left-collapsed">-->
<html>
    <head>
        <!-- Basic -->
        <meta charset="UTF-8">
        <title>@yield('admin_tab_title')</title>
        <meta name="keywords" content="" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

        <!-- Web Fonts  -->
       
        <!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap/css/bootstrap.css')}}">
		<link rel="stylesheet" href="{{asset('public/admin/vendor/animate/animate.css')}}">

		<link rel="stylesheet" href="{{asset('public/admin/vendor/font-awesome/css/fontawesome-all.min.css')}}">
		<link rel="stylesheet" href="{{asset('public/admin/vendor/magnific-popup/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css')}}">

        <!-- Specific Page Vendor CSS -->		
        <link rel="stylesheet" href="{{asset('public/admin/vendor/jquery-ui/jquery-ui.css')}}">		
        <link rel="stylesheet" href="{{asset('public/admin/vendor/jquery-ui/jquery-ui.theme.css')}}">		
        <link rel="stylesheet" href="{{asset('public/admin/vendor/bootstrap-multiselect/bootstrap-multiselect.css')}}">		
        <link rel="stylesheet" href="{{asset('public/admin/vendor/morris/morris.css')}}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('public/admin/css/theme.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('public/admin/css/custom.css')}}">

		<!-- Head Libs -->
        <script src="{{asset('public/admin/vendor/modernizr/modernizr.js')}}"></script>		
        		
        <script src="{{asset('public/admin/vendor/ckeditor/contents.css')}}"></script>		
        {{-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script> --}}

        <script src="{{asset('public/admin/vendor/jquery/jquery.js')}}"></script>

        <script src="{{asset('public/admin/master/style-switcher/style.switcher.localstorage.js')}}"></script>
        <script type="text/javascript">
            var SITE_URL = "{{URL::to('/')}}"; 
        </script>

        
    </head>
    <body>